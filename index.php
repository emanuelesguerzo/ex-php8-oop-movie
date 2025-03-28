<?php

// Import
require_once "./Models/HasRating.php";
require_once "./Models/Movie.php";
require_once "./Models/Genre.php";
require_once "./db.php";

// Header
include "partials/header.php";

// Main
echo "<ul>";
foreach ($movies as $movie) {
    echo "<li>";
    include "partials/movie-card.php";
    echo "</li>";
}
echo "</ul>";

// Footer
include "partials/footer.php";

?>
