<?php

// Import
require_once "./Models/HasRating.php";
require_once "./Models/Movie.php";
require_once "./Models/Genre.php";
require_once "./db.php";

echo $theLastSamurai->getMovieInfo();
echo "Voto:" . $theLastSamurai->getRatingStars() . "<br>";

echo $theImitationGame->getMovieInfo();
echo "Voto:" . $theImitationGame->getRatingStars();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movies</title>
</head>
<body>

    <ul>
       <?php foreach($movies as $movie) : ?>
        <li><?= $movie->title ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>