<?php

class Movie {

    public $title;
    public $director;
    public $year;
    public $duration;
    public $genres;

    function __construct($_title, $_director, $_year, $_duration, array $_genres) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->genres = $_genres;
    }

    public function getMovieInfo() {
        return "$this->title, diretto da $this->director.";
    }

    public function getMovieGenres() {
        $names = [];

        foreach($this->genres as $genre) {
            $names[] = $genre->name;
        }
        return implode(", ", $names);
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

// Genres
$drama = new Genre("Drammatico", "Film emotivamente intensi");
$thriller = new Genre("Thriller", "Film con suspense e colpi di scena");
$adventure = new Genre("Avventura", "Film ricchi di esplorazioni, viaggi e sfide eroiche");
$action = new Genre("Azione", "Film dinamici con combattimenti, inseguimenti e adrenalina");
$historical = new Genre("Storico", "Film ambientati in epoche passate, spesso basati su eventi reali");
$war = new Genre("Guerra", "Film che raccontano conflitti armati e le esperienze dei soldati");
$suspense = new Genre("Suspense", "Film che creano tensione e mistero, tenendo lo spettatore col fiato sospeso");

// Genres Arrays
$lastSamuraiGenres = [$adventure, $drama, $historical, $action];
$imitationGameGenres = [$historical, $thriller, $war, $action, $suspense];

// Movies
$theLastSamurai = new Movie("The Last Samurai", "Edward Zwick", 2003, 150, $lastSamuraiGenres);
$theImitationGame = new Movie("The Imitation Game", "Morten Tyldum", 2014, 115, $imitationGameGenres);

echo $theLastSamurai->getMovieInfo();

var_dump($theLastSamurai);
var_dump($theImitationGame);

?>