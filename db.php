<?php

// Genres
$drama = new Genre("Drammatico", "Film emotivamente intensi");
$thriller = new Genre("Thriller", "Film con suspense e colpi di scena");
$adventure = new Genre("Avventura", "Film ricchi di esplorazioni, viaggi e sfide eroiche");
$action = new Genre("Azione", "Film dinamici con combattimenti, inseguimenti e adrenalina");
$historical = new Genre("Storico", "Film ambientati in epoche passate, spesso basati su eventi reali");
$war = new Genre("Guerra", "Film che raccontano conflitti armati e le esperienze dei soldati");
$suspense = new Genre("Suspense", "Film che creano tensione e mistero, tenendo lo spettatore col fiato sospeso");

// Genre Arrays
$lastSamuraiGenres = [$adventure, $drama, $historical, $action];
$imitationGameGenres = [$historical, $thriller, $war, $action, $suspense];

// Movies
$theLastSamurai = new Movie("The Last Samurai", "Edward Zwick", 2003, 150, $lastSamuraiGenres);
$theImitationGame = new Movie("The Imitation Game", "Morten Tyldum", 2014, 115, $imitationGameGenres);

// Trait Rating
$theLastSamurai->rating = 4;
$theImitationGame->rating = 5;

// Movies Array
$movies = [$theLastSamurai, $theImitationGame]

?>