<div class="movie-card">
    <img src="<?= $movie->poster ?>" alt="Locandina del film <?= $movie->title ?>">
    <h2><?= $movie->title ?></h2>
    <p>Regista: <?= $movie->director ?></p>
    <p>Durata: <?= $movie->duration ?> minuti</p>
    <p>Generi: <?= $movie->getMovieGenres() ?></p>
    <p> <?= $movie->getRatingStars() ?></p>
</div>