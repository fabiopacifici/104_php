<?php
require __DIR__ . '/Models/Category.php';
require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Food.php';
require __DIR__ . '/Models/Toy.php';
require __DIR__ . '/Models/House.php';
require __DIR__ . '/database/db.php';



/* 

Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

- Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

- Category (dogs/cats)
- Product
  - Food
  - Toy
  - House

*/

#call static prop
//var_dump(Product::$test_property);

include __DIR__ . '/layout/head.php';

?>


<main>
  <?php include __DIR__ . '/partials/products.php';  ?>
</main>

<?php

include __DIR__ . '/layout/footer.php';
