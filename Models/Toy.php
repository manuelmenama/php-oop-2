<?php

class Toy extends Product {

  public $feature;
  public $size;

  /**
   * @var String tipologia gioco
   * @var String taglia gioco
   */
  public function __construct($_id, $_name, $_brand, $_category, $_price, $_is_aviable, $_image_path, $_feature, $_size)
  {
    parent::__construct($_id, $_name, $_brand, $_category, $_price, $_is_aviable, $_image_path);

    $this -> feature = $_feature;
    $this -> size = $_size;
  }
  
}