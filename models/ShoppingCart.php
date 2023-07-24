<?php

class ShoppingCart {

    protected $products;

    public function __construct( array $products = [])
    {
        $this->setProducts($products);
    }

    private function setProducts($products) {
        foreach ($products as $product) {
            if (!($product instanceof Product)) {
                throw new InvalidArgumentException('All elements in the array must be instances of the Product class.');
            }
        }
        $this->products = $products;
    }
}


?>