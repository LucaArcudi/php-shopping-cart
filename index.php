<?php

require_once __DIR__ . "/db/db.php";
require_once __DIR__ . "/Controllers/Cart/ProductController.php";
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
      <div class="row" style="height: 45vh;">
        <div class="col-9 products-wrapper">
          <h2 class="text-center fw-bolder">
            Products
          </h2>
          <div class="row h-100 justify-content-around">
            <?php foreach ($products as $product): ?>
              <div class="card border-0 col-3">
                <img src="<?php echo $product->getImage() ?>" class="card-img-top" style="height: 150px;" alt="<?php echo $product->getName().'immagine' ?>">
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
                    <?php echo ($product instanceof Food) ? 'Peso: '.$product->getWeight() : 'Peso: N/A'; ?>
                  </li>
                  <li class="list-group-item">
                    <?php echo 'Prezzo: '.$product->getPrice() ?>
                  </li>
                </ul>
                <div class="card-body">
                  <form action="Controllers/Cart/ProductController.php" method="POST">
                    <input type="hidden" name="product_to_add_name" value="<?php echo $product->getName() ?>">
                    <button class="btn btn-outline-success" type="submit">Aggiungi al carrello</button>
                  </form>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        
        <div class="col-3 h-100 cart-wrapper">

          <?php if(empty($cart->getProducts())): ?>
            <h2 class="text-center fw-bolder mb-4">Cart</h2>
          <?php else: ?>
            <h2 class="text-center fw-bolder mb-4">
              Cart  - &euro;<?php echo $cart->getTotalPrice($cart->getProducts()) ?>
            </h2>
          <?php endif; ?>

          <div class="row g-0 h-100 mb-4 text-center overflow-auto">
            <?php if(empty($cart->getProducts())): ?>
              <p>Il carrello è vuoto</p>
            <?php else: ?>
              <?php foreach ($cart->getProducts() as $product): ?>
                <div class="card border-0">
                  <div class="card-body">
                    <img src="<?php echo $product->getImage() ?>" class="card-img-top" style="height: 100px; width:150px;" alt="<?php echo $product->getName().'immagine' ?>">
                    <h5 class="card-title">
                      <?php echo $product->getName() ?>
                    </h5>
                    <p>
                      <span>
                        <?php echo 'Marca: '.$product->getBrand() ?> - <?php echo 'Prezzo: '.$product->getPrice() ?> 
                      </span>
                    </p>
                    <form action="Controllers/Cart/ProductController.php" method="POST">
                      <input type="hidden" name="product_to_remove_name" value="<?php echo $product->getName() ?>">
                      <button class="btn btn-outline-danger btn-sm mb-3" type="submit">Rimuovi dal carrello</button>
                    </form>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
          <div class="row text-center">            
            <form action="Controllers/Cart/ProductController.php" method="POST">
              <input type="hidden" name="remove_all_products">
              <button class="btn btn-danger btn-lg mb-3" type="submit">Svuota il carrello</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>