<?php

class Category {
  public $name;
  public $icon;

  /**
   * @var String nome categoria
   * @var String classe icona
   */
  public function __construct($_name, $_icon)
  {
    $this -> name = $_name;
    $this -> icon = $_icon;
  }
}