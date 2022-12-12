<?php

class Food extends Product {

  public $weight;
  public $ingredients;
  public $taste;

  /**
   * @var Numeric peso della confezione
   * @var Array ingredienti
   * @var String gusto
   */
  public function __construct($_id, $_name, $_brand, $_category, $_price, $_is_aviable, $_image_path, $_weight, $_ingredients, $_taste)
  {
    parent::__construct($_id, $_name, $_brand, $_category, $_price, $_is_aviable, $_image_path);

    $this -> weight = $_weight;
    $this -> ingredients = $_ingredients;
    $this -> taste = $_taste;
  }
  

}