<?php


/**
 * Leggere una lista di todo richiedendola al nostro "server". 
 * Permettere di inviare un nuovo item.
 * BONUS: gestire la persistenza tramite un file json e file_get_contents/file_put_contents
 */
?>

<!doctype html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Document</title>
  <link href='./style.css' rel='stylesheet'>
</head>

<body>
  <div id='app'>
    <h1>{{title}}</h1>

    <ul v-if="todos">
      <li v-for="(task, index) in todos" :key="task + index">
        {{task}}
      </li>
    </ul>

    <div class="add_task">
      <input type="text" v-model="newTask" @keyup.enter="updateTasks" placeholder="Add a new todo">
      <span v-show="error">{{error}}</span>
    </div>

  </div>
  <!-- Development only cdn, disable in production -->
  <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src='./main.js'></script>
</body>

</html>