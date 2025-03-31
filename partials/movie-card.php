<div class="container">
    <a class="add-movie-btn" href="./add-movie.php">+ Aggiungi un nuovo film</a>
    <h1 class="">I tuoi film (<?= Movie::getMovieCount() ?>)</h1>
    <ul class="row">
        <?php foreach ($movies as $movie) : ?>
            <li class="col">
                <div class="movie-card">

                    <div class="card-container">
                        <img src="<?= $movie->poster ?>" alt="Locandina del film <?= $movie->title ?>">
                    </div>

                    <div class="card-text">

                        <div>
                            <h4><?= $movie->title ?></h4>
                            <p class="directed">Diretto da <?= $movie->director ?></p>
                        </div>

                        <div>
                            <p class="description"><?= $movie->description ?></p>
                        </div>

                        <div>
                            <a href="#" class="watch-now">Guarda ora<i class="fa-solid fa-arrow-right"></i></a>
                        </div>

                        <div>
                            <p class="duration"> <?= $movie->duration ?> minuti</p>
                            <p class="genres"> <?= $movie->getMovieGenres() ?></p>
                            <p class="rating"> <?= $movie->getRatingStars() ?></p>
                        </div>

                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>