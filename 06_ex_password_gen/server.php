<?php
require __DIR__ . '/Helpers/functions.php';

if (isset($_GET['pass_length'])) {

  $length = $_GET['pass_length'];
  $password = generatePassword($length);
}

//var_dump($password);
// save the password into the session
// - start the session
// - user the $_SESSION super global

session_start();
$_SESSION['password'] = $password;

//var_dump($_SESSION);


// redirect the user back to the index.php page

header('Location: ./index.php');
