<?php
/* 
Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password.

Una nostra funzione utilizzerà questo dato per generare una password casuale 
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. 

Scriviamo tutto (logica e layout) in un unico file index.php

*/

include __DIR__ . '/layout/head.php';

session_start();

?>

<main>
  <div class="container py-5">

    <div class="col-8 mx-auto">
      <div class="card bg-white p-3">
        <h3>Password Generator</h3>


        <?php if (!empty($_SESSION['password'])) : ?>
          <div class="alert alert-info" role="alert">
            <strong>Password</strong> <?= $_SESSION['password']; ?>
          </div>
        <?php endif; ?>


        <form action="/server.php" method="GET">
          <div class="mb-3">
            <label for="pass_length" class="form-label">How many characters do you want for your password?</label>
            <input type="number" name="pass_length" id="pass_length" class="form-control" placeholder="10" aria-describedby="passwordLengthHelper">
            <small id="passwordLengthHelper" class="text-muted">Your password length</small>
          </div>
          <button type="submit" class="btn btn-primary">Generate</button>
        </form>
      </div>

    </div>
  </div>
</main>


<?php

include __DIR__ . '/layout/footer.php';




/*

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale


Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
leggete le slide sulla session e la documentazione


Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.


*/
