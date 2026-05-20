const apiKey = "1a646605acf5fa0ab6df21b876c19729";
const url = `https://api.themoviedb.org/3/movie/popular?api_key=${apiKey}&language=en`;

    function pickMoviesItem(){

        fetch(url).then(response => response.json()).then(data =>{
            console.log(data)

            const listMovie = data.results;
            const container = document.getElementById('movieContainer');
            // const userKosong = document.getElementById('userName');
            // const userName = document.getElementById('user');
            // const userDb = userName.dataset.username;
            container.innerHTML = '';

            listMovie.forEach(film => {
                const urlPoster = `https://image.tmdb.org/t/p/w500${film.poster_path}`;
                container.innerHTML += `
                    <div class="col">
                        <div class="card shadow-lg">
                            <img src="${urlPoster}" class="card-img-top">
                            <div class="card-body">
                                <h5>${film.title}</h5>
                                <div class="overflow-scroll">
                                <p>${film.overview.substring(0, 100)}</p>
                                </div>
                                <div class="card-footer text-center">
                                <h6><span class="text-yellow">⭐</span>${Math.round(film.vote_average)}/10 <small> Rating from Me</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                `
            });

        })
        .catch(e => {
            console.log(e)
        })

        // userKosong.innerHTML = userDb;
    }

    pickMoviesItem();