<?php
class User
{
  protected $name;
  private $email = 'test@email.com';
  public $address;
  public $discount = 0;


  function getName()
  {
    return $this->name;
  }


  public function getDiscount()
  {
    return $this->discount;
  }


  function getEmail()
  {
    return $this->email;
  }


  public function setDiscount($age)
  {
    if ($age > 65) {
      $this->discount = 40;
    }
  }


  public function setName($name)
  {
    $this->name = $name;
  }
}


class Employee extends User
{
  public $level;

  public function setLevel($level)
  {
    $this->level = $level;
    var_dump($this->email);
    die;
  }

  /* Polimorph method */
  public function setDiscount($eta)
  {
    if ($eta > 65) {
      $this->discount = 50;
    } else {
      $this->discount = $this->level * 10;
    }
  }
}




$user = new User();
//$user->name = 'Fabio'; // not working if name is protected/private
$user->setName('Fabio');
//var_dump($user->name); // not working if name is protected/private
var_dump($user->getName());
var_dump($user->getEmail());
$user->setDiscount(40);
//var_dump($user);

// Private properties/methods only accessible inside their class
//$user->email = 'fabio@fabio.com';


$employee = new Employee();
var_dump($employee);
$employee->setDiscount(67);
var_dump($employee->discount);
var_dump($employee->getDiscount());


$new_employee = new Employee();
$new_employee->setLevel(2);
$new_employee->setDiscount(40);
var_dump($new_employee->getDiscount());
//var_dump($new_employee->email);

var_dump($new_employee);
