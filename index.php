<?php

class Movie {

    public $title;
    public $director;
    public $year;
    public $duration;
    public $genre;

    function __construct($_title, $_director, $_year, $_duration, $_genre) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->genre = $_genre;
    }

    public function getMovieInfo() {
        return "$this->title, diretto da $this->director.";
    }
}

$theLastSamurai = new Movie("The Last Samurai", "Edward Zwick", 2003, 150, "Drammatico");
$theImitationGame = new Movie("The Imitation Game", "Morten Tyldum", 2014, 115, "Thriller");

echo $theLastSamurai->getMovieInfo();

var_dump($theLastSamurai);
var_dump($theImitationGame);

?>