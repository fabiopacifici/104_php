<?php

/* 
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.

Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.

Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare

*/


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Badwords</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>

<body>



  <div class="container">
    <form action="server.php">


      <div class="mb-3">
        <label for="word" class="form-label">Word</label>
        <input type="text" class="form-control" name="word" id="word" aria-describedby="wordHelper" placeholder="Type a word to censor">
        <small id="wordHelper" class="form-text text-muted">Type a word to cencor</small>
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Text</label>
        <input type="text" class="form-control" name="text" id="text" aria-describedby="textHelper" placeholder="Type a text to censor">
        <small id="textHelper" class="form-text text-muted">Type a text to cencor</small>
      </div>

      <button type="submit">Censor</button>

    </form>
  </div>


  Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ex deserunt esse temporibus enim? Nobis incidunt labore ad quo nulla commodi voluptatibus facere accusamus eligendi quos, ipsum qui vero. Ipsum.
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ex deserunt esse temporibus enim? Nobis incidunt labore ad quo nulla commodi voluptatibus facere accusamus eligendi quos, ipsum qui vero. Ipsum.


</body>

</html>