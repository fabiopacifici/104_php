<?php

require_once __DIR__ . '/../Traits/Namable.php';


/**
 * # Product Class Declaration
 * This is the class for a category
 * @author Fabio Pacifici
 * @copyright 2023 Fabio Pacifici
 * @license MIT
 *  
 */
class Product
{


  use Namable;
  /* 
  Il trait importa dietro le quinte il suo contenuto nella classe dove é usato.

  public function getName(): string
  {
    return $this->name;
  }



  public function setName($new_name)
  {
    $this->name = $new_name;
  }
  */

  public static $test_property = 'Product';

  public function __construct(protected int $id, protected string $name, protected float $price, Category $category, protected string $image, protected string $short_description)
  {
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
    $this->category = $category;
    $this->image = $image;
    $this->short_description = $short_description;
  }

  public function getClassName()
  {
    return get_class(); //https://www.php.net/manual/en/function.get-class.php
  }
  /* 
  public function getName(): string
  {
    return $this->name;
  } */


  public function getImagePath(): string
  {
    return $this->image;
  }

  public function getPrice(): string
  {
    return '€' . $this->price;
  }


  /* Setter */
  /* public function setName($new_name)
  {
    $this->name = $new_name;
  } */
}
