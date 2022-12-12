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


$foods[] = new Food(1, "Natural Super Premium", "Monge", new Category("Cane", "fa-solid fa-dog"), 38.90, true, "https://arcaplanet.vtexassets.com/arquivos/ids/255544/monge-adult-medium-pollo-12kg-600x600.jpg", 12, $natural_super_ingredients, "Pollo");


$toys[] = new Toy(2, "Feater Teaser", "KONG", new Category("Gatto", "fa-solid fa-cat"), 6.44, true, "https://arcaplanet.vtexassets.com/arquivos/ids/255925/Feather-Tease-002.jpg", "Contiene erba gatta", "Medium");


$accessories[] = new Accessory(3, "Cappottino impermeabile nero", "LOVEDI", new Category("Cane", "fa-solid fa-dog"), 32.83, true, "https://arcaplanet.vtexassets.com/arquivos/ids/225402/lovedi-cappotto-imp-con-agnellino-nero-tg-36.jpg", "small", "Sintetico impermeabile");

