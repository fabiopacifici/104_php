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




include __DIR__ . '/layout/head.php';

?>


<main>

  <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Welcome to Our Pets Shop</h1>
      <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
      <button class="btn btn-primary btn-lg" type="button">Example button</button>
    </div>
  </div>

  <div class="container">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, iure? Cum debitis quis asperiores, laborum consequuntur, illum tempora animi autem vel dignissimos odio vero eius et facere. Nisi nobis non reprehenderit optio id fugiat quis corrupti et. Rem ipsum accusantium error quasi accusamus suscipit quidem esse tempora eius deleniti sunt molestias doloribus doloremque veniam, magni amet ipsa nemo distinctio exercitationem aperiam unde repellat eaque! Distinctio quisquam praesentium repellendus sequi a debitis expedita inventore, corporis est quidem aliquid pariatur nesciunt iste exercitationem cumque labore saepe placeat hic? Cupiditate error harum sit! Doloribus inventore debitis perspiciatis, illum sint aperiam hic unde! Aliquam perferendis dolorum cumque repudiandae sit numquam explicabo ut velit omnis officia necessitatibus quisquam, vero accusantium nesciunt veniam itaque possimus dolor vitae doloremque dolorem. Enim cumque ut maxime tempore sequi voluptate similique assumenda iure quas quidem dicta reprehenderit distinctio quasi, ad blanditiis, sed, nisi accusamus aperiam repellat quibusdam dolor sint saepe! Perspiciatis dolor dolorum dolores voluptatem optio dignissimos accusantium deleniti officia ut iure quam laudantium consequatur temporibus maiores, error porro magnam. Reiciendis quam culpa quas cum harum dolorum deleniti. Unde, temporibus. Officia, autem ullam fugiat enim pariatur sunt ratione necessitatibus doloribus doloremque ex id nostrum minus sint fuga veritatis deserunt voluptatibus a expedita? Doloremque maiores et esse modi placeat commodi, error eius amet facilis possimus consequuntur minus libero. Voluptatum expedita quibusdam illo at tenetur sint ipsa excepturi saepe quidem! Ipsam facilis, consequatur unde officiis doloribus doloremque eos voluptas sit dolore temporibus quae similique facere ad tempora earum enim molestias maiores dicta animi labore ut modi provident. Fugiat, aut earum neque beatae iste quo facere vitae nulla provident saepe nobis quae voluptatum adipisci hic ipsam ratione dicta ipsum dolorum consectetur ullam excepturi. Expedita vel corporis nemo magni nulla sunt quae dolorum modi distinctio recusandae odit voluptas ratione ipsum, sint fugit qui et aperiam nihil nesciunt at libero reiciendis velit veritatis ducimus. Optio, mollitia cum nobis neque quaerat perferendis. Est a, ea in asperiores voluptatibus autem nesciunt illum nemo necessitatibus. Obcaecati et ex sit, fugiat id accusantium officiis! Iure architecto saepe autem ratione neque iusto cum nemo laudantium delectus beatae quisquam repudiandae vel at laborum aliquid placeat quaerat id, quis voluptatibus nobis optio recusandae! Repudiandae a ab soluta aspernatur, obcaecati maiores ut vel! Voluptatum dignissimos sunt odit laboriosam soluta. Perferendis laboriosam ut repellendus quaerat pariatur, alias veritatis obcaecati aut quis expedita hic reiciendis, porro qui ullam quae perspiciatis corrupti optio praesentium temporibus molestias.</p>
  </div>

</main>

<?php

include __DIR__ . '/layout/footer.php';
