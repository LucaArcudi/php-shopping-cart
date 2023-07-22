<?php
require_once __DIR__ . '/../Product.php';

class Food extends Product{

    public function __construct($name, Category $category, $description, $type, $brand, $image , $price){
        parent::__construct($name, $category, $description, $type, $brand, $image , $price);
    }
}
