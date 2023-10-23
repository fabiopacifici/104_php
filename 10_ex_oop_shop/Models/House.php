<?php

require_once __DIR__ . '/Product.php';

class House extends Product
{
  public function __construct($id, $name, $price, Category $category, $image, $short_description, $style)
  {
    # Extends the parent constructor
    parent::__construct($id, $name, $price, $category, $image, $short_description);
    # Child constructor params
    $this->style = $style;
  }

  public function getClassName()
  {
    return get_class();
  }
}
