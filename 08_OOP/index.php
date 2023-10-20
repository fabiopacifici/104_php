<?php
# Class Declaration
/**
 * User Class
 * @copyright 2023 Fabio P
 * @author Fabio P
 */
class Person
{
  public $name;
  public $lastName;
  public $is_human = true; // default value shared between all instances


  /** Class Constructor */

  public function __construct($name, $lastName)
  {
    $this->name = $name;
    $this->lastName = $lastName;
  }



  public function walk()
  {
    var_dump('I am walking');
  }

  public function run()
  {
    return 'I am running';
  }
}

# Create Class instances |creates new class objects
$user_1 = new Person('Fabio', 'Pacifici');
$user_2 = new Person('Mario', 'Rossi');

# dump to the page
var_dump($user_1);
var_dump($user_2);


# Access to the object properties
## write
$user_1->name = 'Fabio';
$user_1->lastName = 'Pacifici';
$user_1->is_human = false;

$user_2->name = 'Riccardo';
$user_2->lastName = 'Voltolina';
$user_2->is_human = false;


## read
var_dump($user_1);
var_dump($user_1->name); // Fabio
var_dump($user_2);

# Class Methods
// invoke a method
$user_1->walk();
var_dump($user_2->run());

/* 
$users = [
  [
    'name' => 'Fabio',
    'lastName' => 'Pacifici'
  ]
];
 */



/* Constructor + Composition
  Tigth coupling (accoppiamento stretto)
*/

/* 

class Monitor
{
  public function __construct($name)
  {
    $this->name = $name;
  }
}

class Computer
{
  public $name;
  public $monitor;
  public function __construct($name)
  {
    $this->name = $name;
    $this->monitor = new Monitor('Lenovo Monitor');
  }
}


$pc = new Computer('Lenovo Laptop');
var_dump($pc->monitor->name); */


/* Constructor + Dependency Injection */

class Monitor
{
  public $name;
  public function __construct($name)
  {
    $this->name = $name;
  }
}

class Computer
{
  public $name;
  public $monitor;
  public static $text = 'lorem';
  public function __construct($name, Monitor $monitor)
  {
    $this->name = $name;
    $this->monitor = $monitor;
  }


  public static function showMessage()
  {
    echo 'This is a message';
    // related to your application logic
  }
}


/* $monitor_lenovo = new Monitor('Lenovo Monitor 14"');
$pc = new Computer('Lenovo Laptop', $monitor_lenovo);

var_dump($pc); */



/* Static properties and methods */
Computer::showMessage();

echo Computer::$text;
