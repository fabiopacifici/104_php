<?php

class PremiumUser extends User
{


  public function __construct($name, $lastName, Membership $membership)
  {
    parent::__construct($name, $lastName);
    $this->membership = $membership;
  }


  function setDiscount()
  {
    if ($this->age > 45) {
      $this->discount = 20;
    } else {
      $this->discount = 10;
    }
  }
}
