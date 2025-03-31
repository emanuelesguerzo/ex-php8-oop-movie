<?php

class Movie {

    // Trait
    use HasRating;

    // Static
    protected static $movieCount = 0;

    // Instance Variables
    public $title;
    public $director;
    public $description;
    public $poster;
    public $year;
    public $duration;
    protected $genres;

    // Constructor
    function __construct($_title, $_director, $_description, $_poster, $_year, $_duration, array $_genres) {
        $this->title = $_title;
        $this->director = $_director;
        $this->description = $_description;
        $this->poster = $_poster;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->genres = $_genres;
        self::$movieCount++;
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

    // Get Movie Count
    public static function getMovieCount() {
        return self::$movieCount;
    }

}

?>