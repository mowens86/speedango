// TMBD variables
const topMovies = document.getElementById('topMovies');
const tmdbKey = "95560dd40ad749348a5fa29960e0e8ae";
const topMovieIds = [];


// Fetch Top Movies Functions
async function fetchTopMovies() {
    const response = await fetch(`https://api.themoviedb.org/3/discover/movie?api_key=${tmdbKey}&language=en-US&sort_by=popularity.desc&page=1`);
    const movies = await response.json();
    return movies;
}

fetchTopMovies().then(movies => {
    const slicedMovies = movies.results.slice(0, 6);
    slicedMovies.forEach(movie => {
        topMovieIds.push(movie.id);
        let output = `
            <div class="col-sm-4">
                <div class="card m-2 card-zoom">
                    <a href="#">
                        <img class="card-img-top" src="//image.tmdb.org/t/p/w440_and_h660_face/${movie.poster_path}" alt="" title="${movie.original_title}">
                    </a>
                    <div class="card-body">
                        <h6 class="card-title text-center">${movie.original_title}</h6>
                    </div>
                </div>
            </div>
        `;
        topMovies.innerHTML += output;
    });
})

fetchTopMovies().catch((err) => console.log(err));

const checkStatus = (response) => {
    if (response.ok) {
      return Promise.resolve(response);
    } else {
      return Promise.reject(new Error(response.statusText));
    }
  }
  
const parseJSON = (response) => {
    return response.json();
  }

const waitForAPI = () => {
    const timeout = setInterval(() => {
        if (topMovieIds.length === 6) {
            const topMovieUrls = [
                `https://api.themoviedb.org/3/movie/${topMovieIds[0]}?api_key=${tmdbKey}&language=en-US`,
                `https://api.themoviedb.org/3/movie/${topMovieIds[1]}?api_key=${tmdbKey}&language=en-US`,
                `https://api.themoviedb.org/3/movie/${topMovieIds[2]}?api_key=${tmdbKey}&language=en-US`,
                `https://api.themoviedb.org/3/movie/${topMovieIds[3]}?api_key=${tmdbKey}&language=en-US`,
                `https://api.themoviedb.org/3/movie/${topMovieIds[4]}?api_key=${tmdbKey}&language=en-US`,
                `https://api.themoviedb.org/3/movie/${topMovieIds[5]}?api_key=${tmdbKey}&language=en-US`
            ];
            // console.log(topMovieIds[0]);
            clearInterval(timeout);

            Promise.all(topMovieUrls.map(url => 
                fetch(url)
                    .then(checkStatus)
                    .then(parseJSON)
                    .catch(error => console.log("There was a problem"))
                ))
                .then(data => {
                    console.log(data);
                })


        }
    }, 100);
}

waitForAPI();

module.exports = topMovieIds;