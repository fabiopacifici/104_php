<?php


class User
{
  protected $name;
  protected $lastName;
  protected $discount = 0;
  protected $age;


  public function __construct(string $name, string $lastName)
  {
    $this->name = $name;
    $this->lastName = $lastName;
  }



  /* Getters */
  function getFullName()
  {
    return $this->name . ' ' . $this->lastName;
  }
  function getName()
  {
    return $this->name;
  }
  function getLastName()
  {
    return $this->lastName;
  }
  function getDiscount()
  {
    return $this->discount . '%';
  }

  function getAge()
  {
    return $this->age;
  }


  /* Setters */


  public function setName($name)
  {
    $this->name = $name;
  }

  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }

  public function setDiscount()
  {
    if ($this->age > 65) {
      $this->discount = 40;
    }
  }

  public function setAge($age)
  {
    $this->age = $age;
  }
}
