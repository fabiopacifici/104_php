<?php

require __DIR__ . '/Database/db.php';

//var_dump($movies);


include __DIR__ . '/Layout/head.php';
?>




<main>

  <?php include __DIR__ . '/Layout/partials/jumbotron.php' ?>
  <?php include __DIR__ . '/Layout/partials/movies.php' ?>

</main>


<?php

include __DIR__ . '/Layout/foot.php';
