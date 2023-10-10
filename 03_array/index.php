<?php

/* Array numberic indexes  */
$movies = ['Matrix', 'Avatar', 'Back to the future', 'Man in black'];

/* 

[
  0 => 'Matrix',
  1 => 'Avatar',
  //...
]

*/

// leggo
var_dump($movies);
echo $movies[0];
echo $movies[1];



/* 👉 Associative Array 

[

  key => value

]

*/


$personData = [
  'name' => 'John',
  'lastname' => 'Doe'
];




var_dump($personData);
// leggo 
var_dump($personData['name']);
echo $personData['lastname'];



/* Write array elements  */
$tv_shows = [
  "Mandalorian",
  "Starwars",
  "Lucifer",
  "Lupin"
];


$tv_shows[] = "In a cat mind";
var_dump($tv_shows);



/* Write assoc array */
$user = [
  'username' => 'lupin',
  'email' => 'lupin@ladro.it',
];


$user['password'] = '1234567';

var_dump($user);


/* Complex data structures */

$team = [ // primo livello: array "contenitore" con indici numerici

  [ // secondi livelli: array associtativi
    "name" => "Fabio",
    "lastname" => "Forghieri",
    "role" => "Co-Founder",
  ],
  [
    "name" => "Michele",
    "lastname" => "Papagni",
    "role" => "Head of Teaching",
  ]
];

/* 
[ // primo livello: array "contenitore" con indici numerici
   
  0=> [ // secondi livelli: array associtativi
       "name" => "Fabio",
       "lastname" => "Forghieri",
       "role" => "Co-Founder",
   ],
  1=> [
       "name" => "Michele",
       "lastname" => "Papagni",
       "role" => "Head of Teaching",
   ]
]

*/


var_dump($team[0]);  //first team member
var_dump($team[0]['name']);  //first team member name?


/* Array methods */


//var_dump(array_key_exists('fabio', $personData));



$words = explode(' ', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste repellendus illum rerum voluptates doloribus eligendi, quod, nemo blanditiis molestias accusantium provident. Dolorem, repellat reprehenderit! Impedit cumque commodi est itaque placeat.');

var_dump($words);


//var_dump(in_array($_GET['word'], $words));


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Words Check</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>

<body>

  <div class="container my-4">



    <?php if (isset($_GET['word']) && in_array($_GET['word'], $words)) : ?>

      <p>😎 I found your word</p>

    <?php else : ?>

      <p>😢 Sorry, word not found!</p>


    <?php endif; ?>

    <form>

      <div class="mb-3">
        <label for="word" class="form-label">Word</label>
        <input type="text" name="word" id="word" class="form-control" placeholder="Type a word to find" aria-describedby="wordHelper">
        <small id="wordHelper" class="text-muted">Type a word to find</small>
      </div>


      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>



</body>

</html>