<?php

require_once __DIR__ . '/Helpers/DB.php';
require_once __DIR__ . '/Helpers/function.php';
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

//dd($_SESSION);
if (isset($_SESSION['user_id'])) {

  $username = $_SESSION['user_name'];
  // show the departments table

  // connect to the db
  $connection = DB::connect();
  // perform a sql query
  $sql = "SELECT * FROM `departments`";
  // save the results
  $results = $connection->query($sql);
  //dd($results);

  if ($results->num_rows > 0) {
    $departments = $results->fetch_all(MYSQLI_ASSOC);
    //dd($departments, 'restults are here save them');
    //dd($departments);
  } elseif ($results) {
    echo "0 results";
  } else {
    echo "query error";
  }

  // close the connection
  DB::close_connection($connection);
} else {
  $_SESSION['error_message'] = 'You are not logged in to view the dashbord';
  header('Location: /login.php');
}

include __DIR__ . '/layouts/head.php';

?>




<?php if (isset($_SESSION['user_id'])) : ?>
  <div class="banner bg-dark text-white py-4 mb-5">
    <div class="container">
      Dashboard
      <h2>Welcome <?= $username ?></h2>
    </div>
  </div>
<?php endif; ?>




<main>
  <div class="container">
    <div class="table-responsive-sm">
      <table class="table table-primary">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Head</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($departments as $department) : ?>
            <tr class="">
              <td scope="row"><?= $department['name'] ?></td>
              <td><?= $department['head_of_department'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

</main>



</body>

</html>