<?php

include_once __DIR__ . '/Models/Ingredient.php';
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Toy.php';
include_once __DIR__ . '/Models/Accessory.php';


$natural_super_ingredients = [
  new Ingredient("Pollo"),
  new Ingredient("Riso"),
  new Ingredient("Granturco"),
  new Ingredient("Grasso Animale"),
  new Ingredient("Polpa di Barbabietola essiccata")
];

$natural_super = new Food(1, "Natural Super Premium", "Monge", new Category("Cane", "fa-solid fa-dog"), 38.90, true, "https://arcaplanet.vtexassets.com/arquivos/ids/255544/monge-adult-medium-pollo-12kg-600x600.jpg", 12, $natural_super_ingredients, "Pollo");

var_dump($natural_super);