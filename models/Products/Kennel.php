<?php
require_once __DIR__ . '/../Product.php';

class Kennel extends Product{
    
    public function __construct(string $name, Category $category, string $description, string $type, string $brand, string $image , float $price){
        parent::__construct($name, $category, $description, $type, $brand, $image , $price);
    }
}
