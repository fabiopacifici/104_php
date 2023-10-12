<?php



$todos = json_decode(file_get_contents('todos.json'), true);


if (isset($_POST['newTask'])) {
  $newTask = $_POST['newTask'];
  //var_dump($newTask);
  array_unshift($todos, $newTask);

  //var_dump($todos); [[], [], []] 
  // transform the array into a json
  $todos_json = json_encode($todos);
  // tak the todos_json and use file put contents to save it back
  file_put_contents('todos.json', $todos_json);
}



//var_dump($todos);


# Add a content type header
header('Content-Type: application/json');

# encode the array and echo it out
echo json_encode($todos);
//var_dump(json_encode($todos));
//echo 'ciao';
