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
    
    // Slice top results
    const results = data.results;
    
     // Get matches to current text input
    let matches = results.filter(movie => {
        const regex = new RegExp(`^${searchText}`, 'gi' );
        return movie.original_title.match(regex);
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
            <p class="p-0 m-0 text-white">${match.original_title} | ${match.release_date.substring(0,4)} | <span><small class="text-success">Movie Rating: ${match.vote_average}</small></span></p>
        </div>
        `)
        .join('');
        matchList.innerHTML = html;
    }
}

search.addEventListener('input', () => searchMovies(search.value));

