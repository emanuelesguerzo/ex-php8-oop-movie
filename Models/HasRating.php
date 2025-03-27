<?php

trait HasRating {

    public $rating;

    public function getRatingStars() {
        return str_repeat("★", $this->rating) . str_repeat("☆", 5 - $this->rating);
    }

}

?>