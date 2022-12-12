<?php

class Accessory extends Product{

  public $size;
  public $material;

  public function __construct($_id, $_name, $_brand, $_category, $_price, $_is_aviable, $_image_path, $_size, $_material)
  {
    parent::__construct($_id, $_name, $_brand, $_category, $_price, $_is_aviable, $_image_path);

    $this -> size = $_size;
    $this -> material = $_material;
  }
  
}