// jshint esversion: 6
// jshint esverion: 8

// TMBD variables
const search = document.getElementById('search');
const matchList = document.getElementById('match-list');
const tmdbKey = "95560dd40ad749348a5fa29960e0e8ae";

// Search the MOVIE API results and filter it


const searchMovies = async searchText => {
    // Fetch data
    let res = await fetch(`https://api.themoviedb.org/3/search/movie?api_key=${tmdbKey}&language=en-US&query=${search.value}&page=1&include_adult=false`);
    
    // Check status
    checkStatus(res);

    // Get data back as JSON
    const data = await res.json();
    
    // Get results
    const results = data.results;
    
     // Get matches to current text input
    let matches = results.filter(movie => {
        // check movie poster path to ensure there's an image only
        if (movie.poster_path !== null) {
            const regex = new RegExp(`^${searchText}`, 'gi' );
            return movie.original_title.match(regex);
        }
    });
    
    if(searchText.length === 0) {
        matches = [];
        matchList.innerHTML = '';
    }

    outputHTML(matches);
    
};

// Check Status
const checkStatus = (response) => {
    if (response.ok) {
        return Promise.resolve(response);
    } else {
        return Promise.reject(new Error(response.statusText));
    }
}

// Show results in HTML
const outputHTML = matches => {
    if(matches.length > 0) {
        let idCounter = 0;
        const html = matches.map(match => `
        <div id="movie-title-${idCounter++}" class="card card-body mb-1 p-2 pointer bg-secondary">
            <p class="movie p-0 m-0 text-white">${match.original_title} | ${match.release_date.substring(0,4)} | <span><small class="text-success">Movie Rating: ${match.vote_average}</small></span></p>
        </div>
        `)
        .join('');
        matchList.innerHTML = html;
        autoListeners();
    }
};

const autoListeners = () => {
    const listChildrenCollection = document.getElementById('match-list').children;
    const childrenArray = Array.prototype.slice.call( listChildrenCollection );
    const listLength = document.getElementById('match-list').children.length;
    if(listLength > 0) {

        childrenArray.forEach(child => {
            
            // Create a variable to get id for movies in auto complete
            child.addEventListener('click', () => {

                // Get innerHTML of child element
                const string = child.querySelector('.movie').innerHTML;

                // Find first index of | in innerHTML
                const index = string.indexOf("|");
                let result;
                if (index > 0 ) {
                    // Cut out the substring for the movie title and remove the extra whitespace
                    result = string.substr(0,index - 1);
                    search.value = result;
                }
            });
        });
    }
};

search.addEventListener('input', () => searchMovies(search.value));

