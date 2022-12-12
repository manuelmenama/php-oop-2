<?php

class Ingredient {
  public $name;

  /**
   * @var String nome igrediente
   */
  public function __construct($_name)
  {
    $this -> name = $_name;
  }
}