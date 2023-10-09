<?php

var_dump($_GET);
var_dump($_POST);

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logged in</title>
</head>

<body>
  <h2>Hello <?php echo $firstName; ?> <?php echo $lastName; ?></h2>
  <!-- Concatenazione stringhe -->
  <h2>Hello <?php echo $firstName . '' . $lastName; ?></h2>

  <!-- Double quotes -->
  <h2>Hello <?php echo "$firstName $lastName" ?></h2>



</body>

</html>