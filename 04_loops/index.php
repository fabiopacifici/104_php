<?php

$tv_shows = [
  "Mandalorian",
  "Starwars",
  "Lucifer",
  "Lupin"
];


# FOR Loop
/* Syntax

   for (varibable; condition; increment/decrement) {
      
       // code...
       
   }
  */


for ($i = 0; $i < 10; $i++) {
  echo $i;
}



# While Loops


/* Syntax 

while(condition){
  //code to run
}

do {

} while(condition)


*/



/* 👉 ForEach Loop */

foreach ($tv_shows as $tv) {
  var_dump($tv);
}


# loop arrays and get also the key other than the value
foreach ($tv_shows as $key => $value) {
  # code...
  var_dump($key, $value);
}




$personData = [
  'name' => 'John',
  'lastname' => 'Doe'
];


foreach ($personData as $key => $value) {
  # code...

  var_dump($key);
  var_dump($value);
}



$animals = [
  "mammals" => ["cow", "pig", "horse", "dog"],
  "birds" => ["duck", "chicken"]
];


foreach ($animals as $animalClass) {
  foreach ($animalClass as $animal) {
    var_dump($animal);
  }
}



/* 
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.

*/

$games = [
  [
    'home_team' => 'Lackers',
    'guest_team' => 'Bull',
    'home_score' => '5',
    'guest_score' => '10'
  ],
  [
    'home_team' => 'Lackers',
    'guest_team' => 'Bull',
    'home_score' => '5',
    'guest_score' => '10'
  ],
  [
    'home_team' => 'Lackers',
    'guest_team' => 'Bull',
    'home_score' => '5',
    'guest_score' => '10'
  ],
  [
    'home_team' => 'Lackers',
    'guest_team' => 'Bull',
    'home_score' => '5',
    'guest_score' => '10'
  ],
  [
    'home_team' => 'Lackers',
    'guest_team' => 'Bull',
    'home_score' => '5',
    'guest_score' => '10'
  ]
];


/* 
M2:Stampiamo a schermo tutte le partite con questo schema
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops</title>
</head>

<body>


  <ul>

    <?php foreach ($games as $game) : ?>
      <li><?php echo $game['home_team'] . ' - ' . $game['guest_team'] . ' | ' . $game['home_score'] . '-' . $game['guest_score'] ?></li>
    <?php endforeach; ?>

  </ul>

</body>

</html>