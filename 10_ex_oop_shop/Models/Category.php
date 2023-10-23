<?php
require_once __DIR__ . '/../Traits/Namable.php';


/**
 * # Catagory Class Declaration
 * This is the class for a category
 * @author Fabio Pacifici
 * @copyright 2023 Fabio Pacifici
 * @license MIT
 *  
 */
class Category
{

  use Namable;


  /**
   * Class Constructr
   * @param string $name The category name
   * @param string $icon The icon css class code for fontawesome or bootstrap icons
   */
  public function __construct(protected string $name, protected string $icon)
  {
    $this->name = $name;
    $this->icon = $icon;
  }


  /**
   * Get the category name
   * @return string
   */
  function getName(): string
  {

    return $this->name;
  }

  /**
   * Get the category icon
   * @return string
   */
  function getIcon(): string
  {
    return $this->icon;
  }


  /**
   * Sets the category name
   * @param string $new_name the new name for the category
   * @return void
   */
  public function setName($new_name): void
  {
    $this->name = $new_name;
  }
}
