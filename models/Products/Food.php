<?php
require_once __DIR__ . '/../Product.php';

class Food extends Product{

    protected $weight;

    public function __construct(string $name, Category $category, string $description, string $type, string $brand, string $image , float $price, int $weight){
        parent::__construct($name, $category, $description, $type, $brand, $image , $price, $weight);
        $this->setWeight($weight);
    }

    private function setWeight($weight): void{
        $this->weight = $weight;
    }

    public function getWeight(): int{
        return $this->weight;
    }
}
