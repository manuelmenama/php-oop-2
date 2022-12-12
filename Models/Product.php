<?php

class Product {
  public $id;
  public $name;
  public $brand;
  public $category;
  public $price;
  public $is_aviable;
  public $image_path;


  /**
   * @var Numeric product id
   * @var String product name
   * @var String brand name
   * @var String categoria di prodotto
   * @var Numeric prezzo prodotto
   * @var Boolean disponibilità
   * @var String path dell'immagine
   */
  public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_is_aviable, $_image_path)
  {
    $this -> id = $_id;
    $this -> name = $_name;
    $this -> brand = $_brand;
    $this -> category = $_category;
    $this -> price = $_price;
    $this -> is_aviable = $_is_aviable;
    $this -> image_path = $_image_path;
  }
}