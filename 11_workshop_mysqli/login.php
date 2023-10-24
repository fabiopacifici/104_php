<?php
require_once __DIR__ . '/Helpers/function.php';
require_once __DIR__ . '/Helpers/DB.php';

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (isset($_POST['username']) && isset($_POST['password'])) {


  var_dump($_POST);
  var_dump('check the user credentials');


  // save the user inserted credential 
  $username = $_POST['username'];
  $plain_text_password = $_POST['password']; // hash the password
  $hashed_password = md5($plain_text_password);

  // establish a db connection
  /*  $connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

  if ($connection && $connection->connect_error) {
    throw new Exception("DB Connection Failed" . $connection->connect_error, 1);
  } */

  $connection = DB::connect();
  //dd($connection);
  // prepare a SQL query to check if we have a user with username and password matching the posted data
  //$sql = "SELECT `ID`, `username` FROM `users` WHERE `password` = '5f4dcc3b5aa765d61d8327deb882cf99' AND `username` = 'admin';"
  # 🔔 Attention to SQL injections
  //$sql = "SELECT `ID`, `username` FROM `users` WHERE `username` = $username; AND `password` = $hashed_password";
  //$sql = "SELECT `ID`, `username` FROM `users` WHERE `username` ='" . $username . "' AND `password` = '" . $hashed_password . "';";
  $sql = "SELECT `ID`, `username` FROM `users` WHERE `username` = ? AND `password` = ?";
  // dd($sql);
  $statement = $connection->prepare($sql);
  $statement->bind_param('ss', $username, $hashed_password);
  $statement->execute();

  // get result
  $result = $statement->get_result();

  // dd($statement, $result);

  if ($result->num_rows > 0) {
    // if the user is found
    // take user id and username, save them into the session
    // redirect the user to the dashboard page
    //echo "You can enter the restricted area";
    //dd($result);
    $user = $result->fetch_assoc();

    $_SESSION['user_id'] = $user['ID'];
    $_SESSION['user_name'] = $user['username'];

    header('Location: ./dashboard.php');
  } else {
    // otherwise
    // redirect the user to the login page
    // with a session message

  }
  //$connection->close();
  DB::close_connection($connection);
  // close the db connection



}

include __DIR__ . '/layouts/head.php';


?>
<main>
  <div class="banner bg-dark text-white py-3">
    <div class="container">
      <h3>Log in</h3>
    </div>
  </div>


  <div class="container">
    <div class="card p-5 my-5 col-6 mx-auto">
      <h5 class="text-muted text-uppercase">Log in</h5>
      <?php if ($_SESSION['error_message']) : ?>
        <div class="alert alert-primary" role="alert">
          <strong>Error</strong> <?= $_SESSION['error_message'] ?>
        </div>

      <?php endif ?>
      <form action="" method="POST">
        <div class="mb-3">
          <label for="username" class="form-label"> <i class="fas fa-user fa-xs fa-fw"></i> Username</label>
          <input type="text" name="username" id="username" class="form-control" placeholder="mariorossi" aria-describedby="usernameHelper">
          <small id="usernameHelper" class="text-muted">Type here your username</small>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label"> <i class="fas fa-key fa-xs fa-fw"></i> Password</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="mariorossi" aria-describedby="passwordHelper">
          <small id="passwordHelper" class="text-muted">Type here your password</small>
        </div>


        <button type="submit" class="btn btn-dark">Log in <i class="fas fa-long-arrow-alt-right fa-xs fa-fw"></i></button>

      </form>
    </div>
  </div>

</main>

<?php

include __DIR__ . '/layouts/footer.php';
