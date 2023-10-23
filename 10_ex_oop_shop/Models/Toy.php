<?php
require_once __DIR__ . '/Product.php';

class Toy extends Product
{

  public function __construct($id, $name, $price, Category $category, $image, $short_description, $material_type)
  {
    # Extends the parent constructor
    parent::__construct($id, $name, $price, $category, $image, $short_description);
    # Child constructor params
    $this->material_type = $material_type;
  }

  public function getClassName()
  {
    return get_class();
  }
}
