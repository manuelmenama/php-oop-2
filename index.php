<?php

include_once __DIR__ . '/db.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' integrity='sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==' crossorigin='anonymous'/>

  <title>Oop-pela!</title>
</head>
<body>

  <header class="bg-dark p-2">

    <h1 class="text-light">Arca di planet</h1>

  </header>

  <main class="bg-light">

    <div class="container">
      <h3>Food</h3>
      <div class="row">
        <?php foreach($foods as $food): ?>
          <div class="col-6">
            <div class="card">

              <img src="<?php echo $food->image_path ?>" class="card-img-top" alt="<?php echo $food->name ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $food->name ?></h5>
                <p class="card-text"><?php echo $food->brand ?></p>
                <div>
                  <i class="<?php echo $food->category->icon ?>"></i>
                </div>
                <p>Price: <?php echo number_format($food->price, 2, ",", ".") ?> € <i class="<?php echo ($food->is_aviable) ? ("fa-solid fa-check text-success") : ("fa-solid fa-x text-danger") ?>"></i></p>
                <p><?php echo $food->weight ?> Kg</p>
                <p>Ingredienti:</p>
                <ul>
                  <?php foreach($food->ingredients as $ingredient): ?>
                  <li><?php echo $ingredient->name ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>

            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>

    <div class="container">
      <h3>Toy</h3>
      <div class="row">
      <?php foreach($toys as $toy): ?>
          <div class="col-6">
            <div class="card">

              <img src="<?php echo $toy->image_path ?>" class="card-img-top" alt="<?php echo $toy->name ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $toy->name ?></h5>
                <p class="card-text"><?php echo $toy->brand ?></p>
                <div>
                  <i class="<?php echo $toy->category->icon ?>"></i>
                </div>
                <p>Price: <?php echo number_format($toy->price, 2, ",", ".") ?> € <i class="<?php echo ($toy->is_aviable) ? ("fa-solid fa-check text-success") : ("fa-solid fa-x text-danger") ?>"></i></p>
                <p>Feature: <?php echo $toy->feature ?></p>
                <p>Taglia: <?php echo $toy->size ?></p>
              </div>

            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="container">
      <h3>Accessory</h3>
      <div class="row">
      <?php foreach($accessories as $accessory): ?>
          <div class="col-6">
            <div class="card">

              <img src="<?php echo $accessory->image_path ?>" class="card-img-top" alt="<?php echo $accessory->name ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $accessory->name ?></h5>
                <p class="card-text"><?php echo $accessory->brand ?></p>
                <div>
                  <i class="<?php echo $accessory->category->icon ?>"></i>
                </div>
                <p>Price: <?php echo number_format($accessory->price, 2, ",", ".") ?> € <i class="<?php echo ($accessory->is_aviable) ? ("fa-solid fa-check text-success") : ("fa-solid fa-x text-danger") ?>"></i></p>
                <p>Taglia: <?php echo $accessory->size ?></p>
                <p>Materiale: <?php echo $accessory->material ?></p>
              </div>

            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </main>

  
</body>
</html>