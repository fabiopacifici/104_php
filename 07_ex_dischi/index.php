<?php
/* 

Descrizione
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP


Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.



Bonus (da fare entro domani prima della correzione)
Al click su un disco, recuperare e mostrare i dati del disco selezionato.

*/

?>

<!doctype html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Vue Dischi PHP</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
  <link href='./style.css' rel='stylesheet'>
</head>

<body>
  <div id='app'>
    <header>
      <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <div class="logo">
              <i class="fab fa-spotify fa-lg fa-fw"></i>
            </div>
          </a>
          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
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

    <main>
      <section class="albums mt-4">
        <div class="container">
          <div class="row row-cols-1 row-cols-md-4 g-3">
            <div class="col" v-for="(disk, index) in disks">
              <div class="card text-left text-white h-100">
                <img class="card-img-top" :src="disk.poster" alt="">
                <div class="card-body">
                  <h4 class="card-title">{{disk.title}}</h4>
                  <p class="card-text">{{disk.author}}</p>
                  <p>{{disk.year}}</p>
                  <!-- Modal trigger button -->
                  <button type="button" class="btn btn-dark" data-bs-toggle="modal" :data-bs-target="'#album-modal-' + index ">
                    View
                  </button>

                  <!-- Modal Body-->
                  <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                  <div class="modal fade" :id="'album-modal-' + index" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content bg-dark">
                        <div class="modal-header">
                          <h5 class="modal-title" id="modalTitleId">{{disk.title}}</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <img class="card-img-top" :src="disk.poster" alt="">
                          <h3>{{disk.title}}</h3>
                          <p>
                            {{disk.author}}
                            {{disk.year}}
                            {{disk.genre}}
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>


                  <!-- Optional: Place to the bottom of scripts -->
                  <script>
                    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                  </script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>



  </div>
  <!-- Development only cdn, disable in production -->
  <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>

  <script src='./main.js'></script>
</body>

</html>