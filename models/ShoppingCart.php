<?php

class ShoppingCart {

    protected $products;

    public function __construct( array $products = [])
    {
        $this->setProducts($products);
    }

    private function setProducts($products): void {
        foreach ($products as $product) {
            if (!($product instanceof Product)) {
                throw new InvalidArgumentException('All elements in the array must be instances of the Product class.');
            }
        }
        $this->products = $products;
    }

    public function addProduct (Product $productToAdd): Product {
        $this->products[] = $productToAdd;
        return $productToAdd;
    }

    public function removeProduct (Product $productToRemove): Product {
        foreach ($this->products as $key => $product) {
            if ($product->getName() === $productToRemove->getName()) {
                array_splice($this->products, $key, 1);
                break;
            }
        }
        return $productToRemove;
    }

    public function removeAllProducts (): void {
        $this->products = [];
    }
    
    public function getTotalPrice(array $products): float{
        $totalPrice = 0;
        foreach($products as $product) {
            $totalPrice += $product->getPrice();
        }
        return $totalPrice;
    }

    public function getProducts(): array {
        return $this->products;
    }
}


?>