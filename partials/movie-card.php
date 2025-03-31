<div class="container">
<h1 class="">Film consigliati per te!</h1>
<a class="add-movie-btn" href="./add-movie.php">+ Aggiungi un nuovo film!</a>
    <ul class="row">
        <?php foreach ($movies as $movie) : ?>
            <li class="col">
                <div class="movie-card">
                    <div class="card-container">
                        <img src="<?= $movie->poster ?>" alt="Locandina del film <?= $movie->title ?>">
                    </div>

                    <div class="card-text">
                        <div>
                            <h2><?= $movie->title ?></h2>
                            <p>Diretto da <?= $movie->director ?></p>
                        </div>


                        <p> <?= $movie->duration ?> minuti</p>
                        <p> <?= $movie->getMovieGenres() ?></p>
                        <p> <?= $movie->getRatingStars() ?></p>
                    </div>


                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>