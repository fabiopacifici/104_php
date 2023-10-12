<?php
/* Example 1 */
# Create an array
/* $students = [
  [
    'name' => 'Mario',
    'last_name' => 'Rossi'
  ],
  [
    'name' => 'Giovanna',
    'last_name' => 'Bianchi'
  ],
]; */
/* 
//var_dump($students);
//var_dump(json_encode($students));

# Add a content type header
header('Content-Type: application/json');

# encode the array and echo it out
echo json_encode($students); */

/* Example 2 */
// read file content
//$students_json = file_get_contents('students.json');


// use json decode to transform the $students_json in an assoc array.
/* $students_array = json_decode($students_json);
var_dump($students_array);
die; */


//var_dump($students_json);
/* header('Content-Type: application/json');

echo $students_json; */


/* # File Get Contents/Put contents 
$students_json = file_get_contents('students.json');

//var_dump($students_json);
// decode the json string into an (assoc array)
$students_array = json_decode($students_json, true);
//var_dump($students_array);
// push a new item into the new assoc array
$student =  [
  'name' => 'Luigi',
  'last_name' => 'Rossi'
];
array_push($students_array, $student);
//var_dump($students_array);
// transform the updated assoc array into a json
$updated_students_json = json_encode($students_array);
//var_dump($updated_students_json);
// write the json string to the students.json file
file_put_contents('students.json', $updated_students_json);


header('Content-Type: application/json');

echo $updated_students_json;
*/