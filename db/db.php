<?php
include_once __DIR__ . '/../models/Accessory.php';
include_once __DIR__ . '/../models/Toy.php';
include_once __DIR__ . '/../models/Food.php';
include_once __DIR__ . '/../models/Product.php';

$toyList = [];
$foodList = [];
$accessoryList = [];

$Cuccia = new Accessory(new Category("Cat"), "Arca", "Cuccia gatto", "Memory-foam", "Accessorio", 83.50, 'https://www.creativefabrica.com/wp-content/uploads/2019/03/Dog-Icon-by-Mine-Eyes-Design-580x386.jpg', "Pink", "Acciaio INOX", "S");
$Croccantino = new Food(new Category("Dog"), "Monge", "Croccantini monge salmon", "Buoni!", "Cibo", 3.50, 'https://www.creativefabrica.com/wp-content/uploads/2019/03/Dog-Icon-by-Mine-Eyes-Design-580x386.jpg', "12/11/2025", 300);
$OssoFinto = new Toy(new Category("Dog"), "Kong", "Osso di gomma", "Il vostro cane lo adorerà!", "Giocattolo", 35.50, 'https://www.creativefabrica.com/wp-content/uploads/2019/03/Dog-Icon-by-Mine-Eyes-Design-580x386.jpg', "White", "plastic", 20);

array_push($toyList, $OssoFinto);
array_push($foodList, $Croccantino);
array_push($accessoryList, $Cuccia);
