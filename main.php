<!DOCTYPE html> 
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Main</title>
    <style>
        body{
            background-color:black;
        }
        header,
        nav, 
        section, 
        footer,
        aside{
            text-align: center;
            padding: 20px;
            margin: 10px; 
            background-color:brown ;
        }
        header{
            padding-left: 0;
            padding-right: 0;
        }
        header div {
            background-color: black;
        }
        header  div a{
            text-decoration: none;
            color: gainsboro;
            background-color: ;
            
        }
        header nav{ 
            display : grid;
            grid-template-columns: auto auto auto; 
            font-size: large;
        }
        nav a {
            color:gainsboro;
            text-decoration: none;
            margin: 0 10px;
            position: relative;
            border-right: solid 1px gainsboro;
        }
        nav a:last-child {
            border-right: none;
        }
        nav a:hover{
            font-style: oblique;
            font-weight: bolder;
        }
        /*section*/ 
        section{
            display :flex;
            justify-content: center;
            
        }
        section div {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 50%;
        margin: 10px;
        font-size: 1.5rem;
        text-align: center;
        }
        .MovieTitle {
            margin-top: 10px;
            font-size: 0.5em;
            color:gainsboro;
        }
        .poster-image {
            width: 100%;
            height: 100%;
        }

        div img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        footer{
            display: flex;
            align-items: center;
            justify-content: center; 
            clear:both;
            height : 100px; 
            margin : 10px;
            color : gainsboro;
        }
        
    </style> 
</head> 
    <body>
        
        <header>
            <div>
                <H1><a href = "main.php">Theather</a></H1> 
            </div>
            <nav>
                <a href = "main.php">HOME</a>
                <a href = "Reservation.php">RESERVATION</a>                
                <a href = "LogIn.php">LOG IN</a> 
            </nav> 
        </header>
        <section>
            <div>
                <img src="" id="poster1" class="poster-image">
                <p id="title1" class = "MovieTitle"></p>
            </div>
            <div>
                <img src="" id="poster2" class="poster-image">
                <p id="title2" class = "MovieTitle"></p>
            </div>
            <div>
                <img src="" id="poster3" class="poster-image">
                <p id="title3" class = "MovieTitle"></p>
            </div>
            <div>
                <img src="" id="poster4" class="poster-image">
                <p id="title4" class = "MovieTitle"></p>
            </div>
        </section>
            
        <footer> 
            <p>information</p>s
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
            function fetchMovies() {
                axios.get('http://www.omdbapi.com/?apikey=a1b782a3&s=harry potter')
                    .then(function(response) {
                        console.log(response);
                        const movies = response.data.Search;
                        for (let i = 0; i < movies.length; i++) {
                            const posterEl = document.querySelector(`#poster${i + 1}`);
                            const titleEl = document.querySelector(`#title${i + 1}`);
                            posterEl.src = movies[i].Poster;
                            titleEl.textContent = movies[i].Title;
                        }
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
                    
            }
            fetchMovies();
        </script>
    </body> 
</html>