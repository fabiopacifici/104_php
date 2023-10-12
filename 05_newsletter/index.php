<?php

include __DIR__ . '/functions.php';
/* Include takes the file content and includes it into another file (like copy/paste)
$test_variable = 'it works';
*/

/* 
Contestualizziamo l’esercizio simulando l’iscrizione ad una newsletter.


**Milestone 1**: 
1. Controllare che la mail passata in GET sia ben formata e contenga un punto e una chiocciola.
2. Se è corretta stampare un messaggio di success in un alert di Bootstrap, altrimenti (sempre in un alert di Bootstrap) mostrare un messaggio di errore.

scriviamo tutto (logica e layout) in un unico file *index.php*

*/


$email_address = $_GET['email'];
if (isset($_GET['email'])) {
  // check if email address has a '@' and '.'

  /*   var_dump(str_contains($email_address, '@'));
  var_dump(str_contains($email_address, '.')); */

  $alert = checkEmailAddress($email_address);
}



include './layout/head.php';

?>

<main>


  <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
      <h1 class="display-5 fw-bold">Our Blog</h1>
      <p class="col-md-8 fs-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At blanditiis pariatur ipsum aperiam accusantium alias.</p>
      <button class="btn btn-primary btn-lg" type="button"> <i class="fas fa-envelope    "></i> Get in touch</button>
    </div>
  </div>


  <?php if (isset($alert) || $alert !== null) : ?>
    <div class="container my-3">
      <div class="alert alert-<?= $alert['color']; ?>" role="alert">
        <strong>Newsletter: </strong> <?= $alert['message']; ?>
      </div>
    </div>
  <?php endif; ?>


  <section class="posts">
    <div class="container">
      <h2 class="text-muted text-uppercase">Our latest articles</h2>
      <div class="row">
        <div class="col">
          <div class="card">
            <img class="card-img-top" src='https://picsum.photos/400/200' alt='' />
            <div class="card-body">
              <h3>Lorem</h3>
              <p>Lorem ipsum dolor sit.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img class="card-img-top" src='https://picsum.photos/400/200' alt='' />
            <div class="card-body">
              <h3>Lorem</h3>
              <p>Lorem ipsum dolor sit.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img class="card-img-top" src='https://picsum.photos/400/200' alt='' />
            <div class="card-body">
              <h3>Lorem</h3>
              <p>Lorem ipsum dolor sit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.posts -->
  <section class="newsletter bg-dark text-white text-center py-5 mt-5">
    <div class="container">
      <h3 class="mb-4">Join our newsletter</h3>

      <form>
        <div class="input-group mb-3">
          <input name="email" id="email" type="text" class="form-control" placeholder="Your email address" aria-label="Your email address" aria-describedby="button-addon2">
          <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Join</button>
        </div>
      </form>
    </div>
  </section>


</main>




<?php

include './layout/footer.php';



/* 


**Milestone 2:** 
verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file *functions.php* che includeremo poi nella pagina principale

Aggiungere anche un po’ di stile alla pagina tramite Bootstrap.

## Bonus

In base alla classe si può valutare se mostrare queste funzionalità bonus:
**Milestone 3:** 
invece di usare una classe statica per lo stile dell’alert, modificarla in base all’esito della funzione. Usare *alert-danger* in caso di errore e *alert-success* in caso di esito positivo.

**Milestone 4:** 
invece di visualizzare il messaggio di success nella *index.php*, in caso di esito positivo effettuare un redirect ad una thankyou page.

**Milestone 5:** 
sullo stesso stile del metodo old() di Laravel, far vedere come utilizzare *$_GET* per valorizzare il campo di input in caso il controllo del server dia esito negativo (KO)
*/