<section class="movies">
  <div class="container">
    <div class="row">


      <?php foreach ($movies as $movie) : ?>

        <div class="col">
          <div class="card">
            <img src="<?= $movie->placeholder; ?>" alt="" class="card-img-top">
            <div class="card-body">
              <?= $movie->getMovieDetails(); ?>
            </div>
          </div>
        </div>

      <?php endforeach; ?>
    </div>
  </div>
</section>