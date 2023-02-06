<?php

include_once __DIR__ . "/db/db.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
  <title>Movies</title>
</head>

<body>



  <nav class="p-3 border-gray-200 rounded bg-gray-50 dark:bg-gray-800 dark:border-gray-700 sticky top-0">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
      <a href="#" class="flex items-center">

      </a>
      <button data-collapse-toggle="navbar-hamburger" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-hamburger" aria-expanded="false">
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
      </button>
      <div class="hidden w-full" id="navbar-hamburger">
        <ul class="flex flex-col mt-4 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded dark:bg-blue-600" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Film</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white">Serie TV</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">More</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <main>

    <div class="md:container md:mx-auto flex justify-center pt-6 gap-4 flex-wrap">

      <?php foreach ($toyList as $product) { ?>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

          <a href="#">
            <img class="rounded-t-lg" src="<?php echo $product->getImage() ?>" alt="" />
          </a>
          <div class="p-5">
            <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $product->getTitle() ?></h5>
            </a>
            <a href="#">
              <h5 class="mb-2 font-bold tracking-tight text-gray-400 dark:text-white"><?php echo $product->getPrice() ?></h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product->getDescription() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product->getType() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product->getBrand() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product->getColor() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product->getSize() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product->getMaterial() ?></p>
          </div>


        </div>

      <?php } ?>

      <?php foreach ($foodList as $product) { ?>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

          <a href="#">
            <img class="rounded-t-lg" src="<?php echo $product->getImage() ?>" alt="" />
          </a>
          <div class="p-5">
            <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $product->getTitle() ?></h5>
            </a>
            <a href="#">
              <h5 class="mb-2 font-bold tracking-tight text-gray-400 dark:text-white"><?php echo $product->getPrice() ?></h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product->getDescription() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product->getType() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product->getBrand() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product->getWeight() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product->getDate() ?></p>
          </div>


        </div>

      <?php } ?>

      <?php foreach ($accessoryList as $product) { ?>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

          <a href="#">
            <img class="rounded-t-lg" src="<?php echo $product->getImage() ?>" alt="" />
          </a>
          <div class="p-5">
            <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $product->getTitle() ?></h5>
            </a>
            <a href="#">
              <h5 class="mb-2 font-bold tracking-tight text-gray-400 dark:text-white"><?php echo $product->getPrice() ?></h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product->getDescription() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product->getType() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product->getBrand() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product->getColor() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product->getTypeAccessory() ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $product->getMaterial() ?></p>
          </div>


        </div>

      <?php } ?>
    </div>

  </main>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

</body>

</html>