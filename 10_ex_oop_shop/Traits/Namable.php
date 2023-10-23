<?php

trait Namable
{


  public function getName(): string
  {
    return $this->name;
  }


  /* Setter */
  public function setName($new_name)
  {
    $this->name = $new_name;
  }
}
