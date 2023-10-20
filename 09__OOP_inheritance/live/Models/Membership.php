<?php


class Membership
{
  public function __construct($name, $price, $date)
  {
    $this->name = $name;
    $this->price = $price;
    $this->date = $date;
  }
}
