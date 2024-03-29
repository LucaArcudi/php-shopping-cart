<?php
require_once __DIR__ . '/../models/Products/Food.php';
require_once __DIR__ . '/../models/Products/Toy.php';
require_once __DIR__ . '/../models/Products/Kennel.php';
require_once __DIR__ . "/../Models/Category.php";
require_once __DIR__ . '/../models/ShoppingCart.php';

$products = [];

$cuccia = new Kennel("Cuccia", new Category("Gatto"), "Cuccia per gatto", "Accessorio", "Saturno", 'https://cdn.wamiz.fr/cdn-cgi/image/format=auto,quality=80,width=776,fit=contain/article/images/cat%20in%20a%20box.png', 49.99);
$croccantini = new Food("Croccantini", new Category("Cane"), "Croccantini per cani", "Cibo", "Marte", 'https://www.robinsonpetshop.it/news/cms2017/wp-content/uploads/2019/08/crocchette-italiane.png', 14.99, 500);
$ossoFinto = new Toy("Osso finto", new Category("Cane"), "Osso finto per cani", "Giocattolo", "Giove", 'https://www.reviewbox.it/wp-content/uploads/2019/10/osso-per-cani-principale-xcyp1-1300x803.jpg', 19.99);

array_push($products, $croccantini, $cuccia, $ossoFinto);