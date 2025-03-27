<?php

class Movie {

    public $title;
    public $director;
    public $year;
    public $duration;
    public $genre;

    function __construct($_title, $_director, $_year, $_duration, Genre $_genre) {
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

class Genre {

    public $name;
    public $description;

    function __construct($_name, $_description) {
        $this->name = $_name;
        $this->description = $_description;
    }
}

$drama = new Genre("Drammatico", "Film emotivamente intensi");
$thriller = new Genre("Thriller", "Film con suspense e colpi di scena");

$theLastSamurai = new Movie("The Last Samurai", "Edward Zwick", 2003, 150, $drama);
$theImitationGame = new Movie("The Imitation Game", "Morten Tyldum", 2014, 115, $thriller);

echo $theLastSamurai->getMovieInfo();

var_dump($theLastSamurai);
var_dump($theImitationGame);

?>