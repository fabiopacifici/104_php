<?php

/* Conditional Statements */

# Syntax
/* 


if (condition) {
  # code...
} else {
  # code...
}

*/

$x = 8;

/* if($x == 10) {
  echo 'its 10';
} else {
  echo 'not 10';
} */

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditionals</title>
</head>

<body>


  <!-- With echo -->
  <?php echo $x; ?>
  <!-- shortcut echo alternative -->
  <?= $x; ?>


  <?php

  /* With echo */
  if ($x == 10) {
    echo 'its 10';
    echo "<h2>its 10</h2>";
  } else {
    echo 'not 10';
  }

  ?>

  <!-- Mixed with html: option 1 -->
  <?php if ($x == 10) {  ?>
    <!-- This is html -->
    <h2>
      the number its a <?php echo $x; ?>
    </h2>
  <?php } ?>



  <!-- Mixed with html: option 1 with else -->
  <?php if ($x == 10) {  ?>
    <!-- This is html -->
    <h2>
      the number its a <?php echo $x; ?>
    </h2>
  <?php } else { ?>
    <p>The number is not 10 but <?= $x; ?></p>
  <?php } ?>


  <!-- Mixed with html: option 1 with elseif/else -->
  <?php if ($x == 10) {  ?>
    <!-- This is html -->
    <h2>
      the number its a <?php echo $x; ?>
    </h2>
  <?php } elseif ($x == 11) { ?>
    <p>The number is not 10 but <?= $x; ?></p>
  <?php } else { ?>
    <p>The number is not 10 but <?= $x; ?></p>
  <?php } ?>



  <!-- Mixed with html: option 2 -->
  <?php if ($x == 10) :  ?>
    <!-- This is html -->
    <h2>
      the number its a <?php echo $x; ?>
    </h2>

  <?php elseif ($x == 11) : ?>
    <p>The number is not 10 but <?= $x; ?></p>

  <?php else : ?>
    <p>The number is not 10 but <?= $x; ?></p>
  <?php endif; ?>

  

</body>

</html>