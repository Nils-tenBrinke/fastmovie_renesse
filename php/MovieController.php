<?php
class MovieController{

    
    // private $con;
    // public function __construct($host,$dbnaam,$gebruiker,$wachtwoord){
        //     $con = new PDO("mysql:host=$host;dbname=$dbnaam;",$gebruiker,$wachtwoord);
        //     $this->con = $con;
        // }
        
    function SearchMovie($MovieName){
        // $MovieName = $MovieName;
    
        $movies = $tmdb->searchMovie($MovieName);
        foreach($movies as $movie){
            echo '<li>'. $movie->getTitle() .' (<a href="https://www.themoviedb.org/movie/'. $movie->getID() .'">'. $movie->getID() .'</a>)</li>';
            echo '<img src="'. $tmdb->getImageURL('w185') . $movie->getPoster() . '"/>';
        }
    }
}
?>