// TMBD variables
const topMovies = document.getElementById('topMovies');
const tmdbKey = "95560dd40ad749348a5fa29960e0e8ae";
const topMovieIds = [];

/** XHR */
// const getApi = () => {
//     const xhr = new XMLHttpRequest();
//     xhr.open('GET', 'https://api.themoviedb.org/3/movie/550?api_key=95560dd40ad749348a5fa29960e0e8ae');
//     xhr.onload = () => {
//         const data = JSON.parse(xhr.response);
//         console.log(data);
//         let output = `<h2>Movie Info</h2>`;
//         output += `
//         <ul>
//             <li>Title: ${data.original_title}</li>
//             <li>Overview: ${data.overview}</li>
//         </ul>
//         `;
//         paraTest.innerHTML = output;
//     }
//     xhr.send();
// }


/** Fetch Top Movies */
const topMoviesApi = () => {
    fetch(`https://api.themoviedb.org/3/discover/movie?api_key=${tmdbKey}&language=en-US&sort_by=popularity.desc&page=1`)
    .then((res) => res.json())
    .then((data) => {
        const movies = data.results.slice(0,6);
        // console.log(movies);
        movies.forEach(movie => {
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
    .catch((err) => console.log(err))
}

topMoviesApi();

/** Steps for getting movie info 
 * Try another api call
 * Get the movie info using the movie id array
 * Incorporate the info with the a href in the output and try it
*/

console.log(topMovieIds[2]);

// const topMoviesInfo = () => {
//     fetch(`https://api.themoviedb.org/3/movie/${topMovieIds.map(movieId => movieId)}?api_key=${tmdbKey}&language=en-US`)
//     .then((res) => res.json())
//     .then((data) => {
//         console.log(data.id);
        
//     })
//     .catch((err) => console.log(err))
// }


// topMoviesInfo();