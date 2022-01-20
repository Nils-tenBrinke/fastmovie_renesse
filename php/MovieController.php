<?php
class MovieController{
    
    private $tmdb;
    private $con;
    public function __construct($host,$dbnaam,$gebruiker,$wachtwoord){
            $con = new PDO("mysql:host=$host;dbname=$dbnaam;",$gebruiker,$wachtwoord);
            $this->con = $con;
            //API implementeren en de waardes publiek stellen.
            include("./php/tmdb_api/tmdb-api.php");
            $apikey = "d3e3162392009d2e4475cde410afc226";
            $this->tmdb = new TMDB($apikey, 'en', true);
        }
        
    function SearchMovie($MovieName){
        $MovieName = $MovieName;
        $movies = $this->tmdb->searchMovie($MovieName);
        return $movies;
    }

    function ShowMovies($movies){
        $movies = $movies;
        foreach($movies as $movie){
            ?>
            <form class="flex flex-col bg-red-200" method="GET">
                <a href="movie.php?id=<?= $movie->getID(); ?>"><img src="<?= $this->tmdb->getImageURL('w185') . $movie->getPoster();?>"/></a>
                <h3 class="movietitle text-2xl"><?= $movie->getTitle();?></h3>
                <h6><?= $movie->getVoteAverage(); ?> / 10</h6>
            </form>
            <?php
        }
    }

    function ShowSingleMovie($movieID){
        $movieID = $movieID;
        $movie = $this->tmdb->getMovie($movieID);
        return $movie;
    }
}
// <?php $movie->getTitle() .' (<a href="https://www.themoviedb.org/movie/'. $movie->getID() .'">'. $movie->getID() .'</a>)'
?>