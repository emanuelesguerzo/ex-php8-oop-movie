<?php

class Movie {

    // Trait
    use HasRating;

    // Instance Variables
    public $title;
    public $director;
    public $poster;
    public $year;
    public $duration;
    public $genres;

    // Constructor
    function __construct($_title, $_director, $_poster, $_year, $_duration, array $_genres) {
        $this->title = $_title;
        $this->director = $_director;
        $this->poster = $_poster;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->genres = $_genres;
    }

    // Get Movie Info
    public function getMovieInfo() {
        return "$this->title, diretto da $this->director.";
    }

    // Get Movie Genres
    public function getMovieGenres() {
        $names = [];

        foreach($this->genres as $genre) {
            $names[] = $genre->name;
        }
        return implode(", ", $names);
    }

}

?>