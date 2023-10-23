<?php


$cats = new Category('cats', 'fa-solid fa-cat');
$dogs = new Category('dogs', 'fa-solid fa-dog');

$categories = [
  $cats,
  $dogs
];


//var_dump($categories);

$generic_product = new Product(1, 'Collare per cani', 9.99, $categories[0], 'https://picsum.photos/400/200?random=1', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, nesciunt!');


$food = new Food(2, 'Wiskas Pranzetti', 19.99, $categories[1], 'https://picsum.photos/400/200?random=2', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, nesciunt!', '2024-12-12');

$ball = new Toy(3, 'Soft colored ball', 2.99, $categories[0], 'https://picsum.photos/400/200?random=3', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, nesciunt!', 'soft');

$treehouse = new House(4, 'Tree house for cats', 29.99, $categories[0], 'https://picsum.photos/400/200?random=4', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, nesciunt!', 'tree');



/* var_dump($food, $ball, $treehouse, $generic_product);


var_dump($generic_product->getImagePath()); */

/* var_dump($food, $ball, $treehouse, $generic_product);


var_dump($generic_product->getClassName());

var_dump($food->getClassName());
var_dump($treehouse->getClassName());
var_dump($ball->getClassName()); */

$products = [
  $generic_product,
  $food,
  $ball,
  $treehouse
];
