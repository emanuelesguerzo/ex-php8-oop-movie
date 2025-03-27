<?php

class Movie {

    // Trait
    use HasRating;

    // Instance Variables
    public $title;
    public $director;
    public $year;
    public $duration;
    public $genres;

    // Constructor
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

?>