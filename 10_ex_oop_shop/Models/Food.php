<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
  public $calories;

  public function __construct($id, $name, $price, Category $category, $image, $short_description, $expiration_date)
  {
    # Extends the parent constructor
    parent::__construct($id, $name, $price, $category, $image, $short_description);
    # Child constructor params
    $this->expiration_date = $expiration_date;
  }


  public function getClassName()
  {
    return get_class();
  }

  /* TODO: Add a method - set food calories */
  function setCalories()
  {
  }
}
