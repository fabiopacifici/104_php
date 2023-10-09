<?php
// Invisible PHP comment

/* Variables */
// under_score case
$user_name = 'Fabio';
$USER_NAME = 'Fabio 2';
$user_age = 43;

// camelCase
$userLastName = 'Pacifici';

# Comment single line
// Comment sinle line

/* 
Comment 
multi
line
*/


/** 
 * Doc block
 */


var_dump($_GET);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intro PHP</title>
</head>

<body>







  <!-- Visible HTML comment -->
  <!--   <h1>Hello <?php echo $user_name; ?></h1>
  <p><?php echo 'lorem ipsum'; ?></p>
  <p><?php echo 43 ?></p>
 -->


  <!-- Form (defaults to GET and to it self) -->

  <form action="login.php" method="POST">
    <input type="text" name="firstname" id="firstname" placeholder="Type your name">
    <input type="text" name="lastname" id="lastname" placeholder="Type your last name">
    <input type="password" name="password" id="password" placeholder="Type your password">

    <button type="submit">Save</button>
  </form>


  <h2>Hello <?php echo $_GET['firstname'] ?> <?php echo $_GET['lastname'] ?></h2>

</body>

</html>