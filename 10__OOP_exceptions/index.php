<?php

class Person
{

  public function __construct(protected string $name)
  {
    $this->name = $name;
  }

  public function calcAge($yob)
  {
    $now = intval(date('Y'));

    if (!is_numeric($yob)) {


      //throw new Exception('It\'s not a number. The calcAge function needs a number to work.', 1);
      throw new InvalidArgumentException('It\'s not a number. The calcAge function needs a number to work.', 1);
      // https://www.php.net/manual/en/spl.exceptions.php
      // https://www.php.net/manual/en/language.exceptions.php
    } elseif ($yob > $now || $yob < $now - 100) {
      //throw new Exception('Invalid age range!');
      throw new RangeException('Invalid age range!');
    }

    return $now - $yob;
  }
}



$person = new Person('Fabio');
var_dump($person);

try {
  $age = $person->calcAge('1980');
  echo $age;
} catch (Exception $error) {
  echo $error->getMessage();
  echo '<br>';
  echo $error->getFile();
  echo '<br>';
  echo $error->getTraceAsString();
}
