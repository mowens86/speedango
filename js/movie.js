// TMBD variables
const topMovies = document.getElementById('topMovies');
const tmdbKey = "95560dd40ad749348a5fa29960e0e8ae";

//

// Check Status
const checkStatus = (response) => {
    if (response.ok) {
        return Promise.resolve(response);
    } else {
        return Promise.reject(new Error(response.statusText));
    }
}

// Parse JSON
const parseJSON = (response) => {
    return response.json();
}

// const topMovieUrls = [
//     `https://api.themoviedb.org/3/movie/${topMovieIds[0]}?api_key=${tmdbKey}&language=en-US`,
//     `https://api.themoviedb.org/3/movie/${topMovieIds[1]}?api_key=${tmdbKey}&language=en-US`,
//     `https://api.themoviedb.org/3/movie/${topMovieIds[2]}?api_key=${tmdbKey}&language=en-US`,
//     `https://api.themoviedb.org/3/movie/${topMovieIds[3]}?api_key=${tmdbKey}&language=en-US`,
//     `https://api.themoviedb.org/3/movie/${topMovieIds[4]}?api_key=${tmdbKey}&language=en-US`,
//     `https://api.themoviedb.org/3/movie/${topMovieIds[5]}?api_key=${tmdbKey}&language=en-US`
// ];
// Promise.all(topMovieUrls.map(url =>
//         fetch(url)
//         .then(checkStatus)
//         .then(parseJSON)
//         .catch(error => console.log("There was a problem"))
//     ))
//     .then(data => {
//         console.log(data);
//     })