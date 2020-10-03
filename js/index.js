// jshint esversion: 6
// jshint esversion: 8

// TMBD variables
const topMovies = document.getElementById('topMovies');
const tmdbKey = "95560dd40ad749348a5fa29960e0e8ae"; // Use express with dotenv for best practice


// Fetch Top Movies Functions
async function fetchTopMovies() {
    const response = await fetch(`https://api.themoviedb.org/3/discover/movie?api_key=${tmdbKey}&language=en-US&sort_by=popularity.desc&page=1`);
    const movies = await response.json();
    return movies;
}

fetchTopMovies().then(movies => {
    const slicedMovies = movies.results.slice(0, 6);
    slicedMovies.forEach(movie => {
        let output = `
            <div class="col-sm-4">
                <div class="card m-2 card-zoom">
                        <img class="card-img-top" src="//image.tmdb.org/t/p/w440_and_h660_face/${movie.poster_path}" alt="" title="${movie.original_title}">
                    <div class="card-body">
                        <h6 class="card-title text-center">${movie.original_title}</h6>
                    </div>
                </div>
            </div>
        `;
        topMovies.innerHTML += output;
    });
});

fetchTopMovies().catch((err) => console.log(err));


