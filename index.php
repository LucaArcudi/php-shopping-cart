<?php

include_once __DIR__ . "/db/db.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies</title>
</head>

<body>
  <main>
    <div>
      
      <?php foreach ($products as $product): ?>
        <div>
            <img src="<?php echo $product->getImage() ?>" alt="" />
            <h3><?php echo $product->getName() ?></h3>
            <p><?php echo $product->getCategory()->getName() ?></p>
            <p><?php echo $product->getDescription() ?></p>
            <p><?php echo $product->getType() ?></p>
            <p><?php echo $product->getBrand() ?></p>
            <p><?php echo $product->getPrice() ?></p>
        </div>
        <?php var_dump ($product) ?>
      <?php endforeach; ?>
    </div>
  </main>
</body>

</html>