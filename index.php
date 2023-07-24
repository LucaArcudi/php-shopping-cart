<?php

require_once __DIR__ . "/db/db.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <header>
    <div class="container">
      <h1 class="text-center p-5 fw-bolder">
        Shop
      </h1>
    </div>
  </header>

  <main>
    <div class="container">
      <div class="row justify-content-around g-0">
        <h2 class="text-center fw-bolder">
          Products
        </h2>
        <?php foreach ($products as $product): ?>
          <div class="card col-3">
            <img src="<?php echo $product->getImage() ?>" class="card-img-top" style="height: 200px;" alt="<?php echo $product->getName().'immagine' ?>">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $product->getName() ?>
              </h5>
              <p class="card-text">
                <?php echo $product->getDescription() ?>
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <?php echo 'Categoria: '.$product->getCategory()->getName() ?>
              </li>
              <li class="list-group-item">
                <?php echo 'Tipo: '.$product->getType() ?>
              </li>
              <li class="list-group-item">
                <?php echo 'Marca: '.$product->getBrand() ?>
              </li>
              <li class="list-group-item">
                <?php echo 'Prezzo: '.$product->getPrice() ?>
              </li>
            </ul>
            <!-- <div class="card-body">
            </div> -->
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </main>
</body>

</html>