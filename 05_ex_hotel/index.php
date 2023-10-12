<?php
/* 

Descrizione
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
- Stampare tutti i nostri hotel con tutti i dati disponibili.
- Prima stampate in pagina i dati, senza preoccuparvi dello stile. 
- Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.



Bonus:
 Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)


NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore) Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.

*/


$hotels = [

  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],

];






if (isset($_GET['rating'])) {
  //var_dump('filter by rating');
  $hotels = array_filter($hotels, function ($hotel) {
    return $hotel['vote'] >= $_GET['rating'];
  });

  /* Foreach */
}


if (isset($_GET['parking']) && $_GET['parking'] == 1) {
  //var_dump('Filter by has parking');

  $hotels = array_filter($hotels, function ($hotel) {

    return $hotel['parking'];
  });

  // With arrow function
  //$new_arra = array_filter($hotels, fn ($hotel) => $hotel['parking']);


} elseif (isset($_GET['parking']) && $_GET['parking'] == 0) {
  //var_dump('Filter by not parking');

  $hotels = array_filter($hotels, function ($hotel) {

    return !$hotel['parking'];
  });
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>EX Hotel</title>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

</head>

<body>



  <header id="site_header">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">HOTELS</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMainMenu" aria-controls="collapseMainMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapseMainMenu">
          <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>

          </ul>

        </div>
      </div>
    </nav>

  </header>
  <!-- /#site_header -->

  <main id="site_main">
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container py-5">
        <h1 class="display-5 fw-bold">Our hotels</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>

      </div>
    </div>
    <!-- /.jumbotron -->



    <div class="container">
      <div class="filters">


        <form>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="parking" id="parking" value="1">
            <label class="form-check-label" for="parking">
              Has Parking
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="parking" id="no_parking" value="0">
            <label class="form-check-label" for="no_parking">
              No Parking
            </label>
          </div>


          <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <select class="form-select form-select-sm" name="rating" id="rating">
              <option value="" <?php echo (isset($_GET['rating']) && $_GET['rating'] == ''  ? 'selected' : '') ?>>All</option>
              <option value="1" <?php echo (isset($_GET['rating']) && $_GET['rating'] == 1  ? 'selected' : '') ?>>1+</option>
              <option value="2" <?php echo (isset($_GET['rating']) && $_GET['rating'] == 2  ? 'selected' : '') ?>>2+</option>
              <option value="3" <?php echo (isset($_GET['rating']) && $_GET['rating'] == 3  ? 'selected' : '') ?>>3+</option>
              <option value="4" <?php echo (isset($_GET['rating']) && $_GET['rating'] == 4  ? 'selected' : '') ?>>4+</option>
            </select>
          </div>


          <button type="submit" class="btn btn-primary">Filter</button>
          <button type="reset" class="btn">Reset Filters</button>
        </form>

      </div>

      <!-- /.filters -->


      <div class="table-responsive">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-dark
        align-middle">
          <thead class="table-dark">
            <caption>Hotels</caption>
            <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Parking</th>
              <th>Vote</th>
              <th>Distance To Center</th>

            </tr>
          </thead>
          <tbody class="table-group-divider">
            <?php foreach ($hotels as $hotel) : ?>

              <tr class="table-primary">
                <td scope="row"><?= $hotel['name']; ?></td>
                <td><?= $hotel['description']; ?></td>
                <td>
                  <?php if ($hotel['parking']) : ?>
                    <i class="fa-solid fa-car" style="color:green"></i>
                  <?php else : ?>
                    <i class="fa-solid fa-car" style="color:red"></i>
                  <?php endif; ?>
                </td>
                <td><?= $hotel['vote']; ?></td>
                <td><?= $hotel['distance_to_center']; ?></td>

              </tr>
            <?php endforeach; ?>

          </tbody>
          <tfoot>

          </tfoot>
        </table>
      </div>

    </div>





  </main>
  <!-- /#site_main -->




  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>

</body>

</html>