<?php


require __DIR__ . '/../Models/Movie.php';
require __DIR__ . '/../Models/Genre.php';



$matrix = new Movie('Matrix', 'lorem ipsum', 120, new Genre('Fantacy'));
$avatar = new Movie('Avatar', 'lorem ipsum', 120, new Genre('Fantacy'));



$movies = [
  $matrix,
  $avatar
];
