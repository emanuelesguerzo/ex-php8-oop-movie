<?php

// Genres
$drama = new Genre("Drammatico", "Film emotivamente intensi");
$thriller = new Genre("Thriller", "Film con suspense e colpi di scena");
$adventure = new Genre("Avventura", "Film ricchi di esplorazioni, viaggi e sfide eroiche");
$action = new Genre("Azione", "Film dinamici con combattimenti, inseguimenti e adrenalina");
$historical = new Genre("Storico", "Film ambientati in epoche passate, spesso basati su eventi reali");
$war = new Genre("Guerra", "Film che raccontano conflitti armati e le esperienze dei soldati");
$suspense = new Genre("Suspense", "Film che creano tensione e mistero, tenendo lo spettatore col fiato sospeso");
$fantasy = new Genre("Fantasy", "Film con elementi magici, mondi immaginari e creature fantastiche");
$comedy = new Genre("Commedia", "Film divertenti e leggeri, spesso con situazioni comiche");

// Genre Arrays
$theLastSamuraiGenres = [$adventure, $drama, $historical, $action];
$theImitationGameGenres = [$historical, $thriller, $war, $action, $suspense];
$lordOfTheRingsGenres = [$fantasy, $adventure, $action];
$theGrandBudapestHotelGenres = [$comedy, $drama, $adventure];

// Movies
$theLastSamurai = new Movie("The Last Samurai", "Edward Zwick", "https://upload.wikimedia.org/wikipedia/en/c/c6/The_Last_Samurai.jpg", 2003, 150, $theLastSamuraiGenres);
$theImitationGame = new Movie("The Imitation Game", "Morten Tyldum", "https://upload.wikimedia.org/wikipedia/en/8/87/The_Imitation_Game_%282014%29.png", 2014, 115, $theImitationGameGenres);
$lordOfTheRings = new Movie("The Lord of the Rings: The Fellowship of the Ring", "Peter Jackson", "https://upload.wikimedia.org/wikipedia/en/f/fb/Lord_Rings_Fellowship_Ring.jpg", 2001, 178, $lordOfTheRingsGenres);
$theGrandBudapestHotel = new Movie("The Grand Budapest Hotel", "Wes Anderson", "https://upload.wikimedia.org/wikipedia/en/1/1c/The_Grand_Budapest_Hotel.png", 2014, 99, $theGrandBudapestHotelGenres);

// Trait Rating
$theLastSamurai->rating = 4;
$theImitationGame->rating = 5;
$lordOfTheRings->rating = 5;
$theGrandBudapestHotel->rating = 4;

// Movies Array
$movies = [$theLastSamurai, $theImitationGame, $lordOfTheRings, $theGrandBudapestHotel];

?>