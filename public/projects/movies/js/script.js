"use strict";

let SearchForm = React.createClass({
    render: function() {
        return (
            <form className="searchForm" method="get" onSubmit={this.props.onSubmit}>
                <label for="name">Search:
                    <input type="text" name="query" autoFocus />
                </label>
                <button type="submit">
                    <i className="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        )
    }
})

let MovieInfoDiv = React.createClass( {
    render: function() {
        return (
            <div>
                <p className="movieTitle">{this.props.movie.title}</p>
                <p className="wrap-movie-year-logo">
                    <span className="movieYear">{this.props.movie.year}</span>
                    {/* Generera bara en spotifylogga med länk till album om filmen har ett album på spotify, annars null. */}
                    {this.props.movie.spotifyUrl !== "" ? (
                        <a href={this.props.movie.spotifyUrl} target="_blank" title="Spotify">
                            <i className="fa-brands fa-spotify"></i>
                        </a>
                    ) : null}
                    <a href={this.props.movie.imdb} target="_blank" title="Imdb">
                        <i className="fa-brands fa-imdb"></i>
                    </a>
                </p>
                <div className="wrap-img">
                    {/* Om inte en poster är tillgänglig, generera en bild 'No poster available'. */}
                    {this.props.movie.poster !== "N/A" ? (
                        <img src={this.props.movie.poster} alt={this.props.movie.title}/>
                    ) : (
                        <img src="./images/No-poster.png" alt=""/>
                    )}
                </div>
            </div>
        )
    }
})

// Funktion för att hämta filmer från omdb Api.
async function fetchMovies(searchQuery) {
    const omdbURL = `https://www.omdbapi.com/?apikey=db8d433d&type=movie&s=${searchQuery}`;
    // Använd en try catch för att fånga eventuella fel med att hämta data från Api:et.
    try {
        // Använd fetch för att göra requesten mot omdbapi
        const response = await fetch(omdbURL);

        // Om responsen inte är ok, throw error
        if (!response.ok) {
            throw new Error (`HTTP error! Status: ${response.status}`);
        }
        // Konvertera JSON från svaret
        const result = await response.json();
        return result;
    } catch(error) {
        console.error('Error fetching data:', error);
    }
}

// Funktion för att hantera access token för Spotify genom att kolla om en giltig token redan finns
// i localstorage och om den gått ut. Om ingen giltig token finns eller om den gått ut, hämtas och
// sparas en ny token till localstorage.
async function getSpotifyToken() {
    let tokenExists = localStorage.getItem('spotifyToken') != null;
    let currentTimestamp = Date.now() / 1000;
    let tokenHasExpired = currentTimestamp > localStorage.getItem('tokenExpirationTimestamp');

    if ( ( !tokenExists ) || ( tokenHasExpired ) ) {
        console.log("Token did not exist in ls. Will now fetch new token");
        let token = await fetchNewSpotifyToken();
        localStorage.setItem('spotifyToken', JSON.stringify(token));
        let tokenExpirationTimestamp = Date.now() / 1000 + 3600;
        localStorage.setItem('tokenExpirationTimestamp', tokenExpirationTimestamp);
    }
}

// Funktion för att hämta en access token från Spotify för att kunna använda deras API.
// Token kan användas i 1h efter att den skapats.
async function fetchNewSpotifyToken() {
    const clientID = "849dd125bfdd452db698f913c8693de9";
    const clientSecret = "cd6c386672c04a0a882e0e5632e39349";
    let response = await fetch("https://accounts.spotify.com/api/token", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
                'Authorization': 'Basic ' + btoa(clientID + ':' + clientSecret)
            },
            body: 'grant_type=client_credentials'
    } );
    let jsonResult = await response.json();
    return jsonResult["access_token"];
}

// Funktion för att hämta filmalbumet från Spotifys API, returnerar en spotifylänk till detta album
// om det finns, annars returneras en tom sträng.
async function fetchAlbum(name, year) {
    // Ersätt mellanslagen i strängen med ett %20 tecken för att färdigställa url:en.
    name = name.replace(/ /g, '%20');
    // Hämta spotify access token från localstorage.
    let token = JSON.parse(localStorage.getItem('spotifyToken'));
    const spotifyUrl = `https://api.spotify.com/v1/search?q=album%3A${name}%20year%3A${year}&type=album&limit=1`;

    // Använd en try catch för att fånga eventuella fel med att hämta data från Api:et.
    try {
        const response = await fetch(spotifyUrl, {
            headers: {
                'Authorization': `Bearer ${token}`,
            }
        });
        // Om responsen inte är ok, throw error
        if (!response.ok) {
            throw new Error (`HTTP error! Status: ${response.status}`);
        }
        // Konvertera JSON från svaret
        const result = await response.json();
        // Om filmnamnet inte genererar ett matchande album på spotify, ge tillbaka en tom sträng.
        if (result.albums.items.length == 0) {
            return "";
        } else {
            // Ge tillbaka det första albumet i resultatet eftersom det verkar vara "det mest korrekta".
            return result.albums.items[0].external_urls.spotify;
        }
    } catch(error) {
        console.error('Error fetching data:', error);
    }
}

let MovieAndAlbum = React.createClass({
    getInitialState: function() {
        return {
            moviesAndAlbums: []
        };
    },
    handleSubmit: async function(event) {
        event.preventDefault();
        // Kör funktionen getSpotifyToken.
        getSpotifyToken();

        let query = event.target.elements.query.value;
        // Ta bort eventuella tomma mellanrum före och efter söksträngen.
        query = query.trim();
        if (query.length == 0) {
            alert('The search field is empty, please try again!');
        } else {
            let moviesRes = await fetchMovies(query);
            if (moviesRes.Response == "False") {
                alert('No movies found or too many results. Please try again!');
            } else {
                // Loopa igenom resultatet från filmerna och för varje film, anropa fetchalbum och hämta
                // info om album, placera informationen om varje film i ett objekt och sedan spara objekten
                // i arrayen movieArr.
                let movieArr = [];
                for (let i = 0; i < moviesRes.Search.length; i++) {
                    let movieTitle = moviesRes.Search[i].Title;
                    let movieYear = moviesRes.Search[i].Year;
                    let spotifyAlbum = await fetchAlbum(movieTitle, movieYear);
                    let imdb = "https://www.imdb.com/title/" + moviesRes.Search[i].imdbID;
                    let moviePoster = moviesRes.Search[i].Poster;

                    let obj = {
                        title: movieTitle,
                        year: movieYear,
                        spotifyUrl: spotifyAlbum,
                        imdb: imdb,
                        poster: moviePoster
                    }

                    movieArr.push(obj);
                }

                // Spara arrayen med informationen om filmerna + albumen i state.
                this.setState({
                    moviesAndAlbums: movieArr
                })
            }
        }
    },
    render: function() {
        return (
            <div className="wrapper">
                <h1 className="h1_movies">Movies!</h1>
                <SearchForm
                    onSubmit={this.handleSubmit}
                />
                <div className="wrap-movieinfo">
                    {this.state.moviesAndAlbums.map(function(movie, index) {
                        return (
                            <MovieInfoDiv
                                movie={movie}
                            />
                        )
                    }, this)}
                </div>
            </div>
        )
    }
})

ReactDOM.render(
    <MovieAndAlbum />,
    document.getElementById('root')
);
