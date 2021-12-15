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
            echo $movie->getTitle() .' (<a href="https://www.themoviedb.org/movie/'. $movie->getID() .'">'. $movie->getID() .'</a>)';
            echo '<img src="'. $this->tmdb->getImageURL('w185') . $movie->getPoster() . '"/>';
        }
    }
}
?>