<?php

use PhpParser\Node\Expr\BinaryOp\BooleanOr;

class Product{

    protected $name;
    protected $category;
    protected $description;
    protected $type;
    protected $brand;
    protected $image;
    protected $price;

    protected function __construct(string $name, Category $category,string $description,string $type,string $brand,string $image ,float $price){
        $this->setName($name);
        $this->setCategory($category);
        $this->setDescription($description);
        $this->setType($type);
        $this->setBrand($brand);
        $this->setImage($image);
        $this->setPrice($price);
    }

    // NAME
    private function setName($name): void{
        $this->name = $name;
    }
    public function getName(): string{
        return $this->name;
    }

    // CATEGORY
    private function setCategory($category): void {
        $this->category = $category;
    }
    public function getCategory(): Category{
        return $this->category;
    }

    // DESCRIPTION
    private function setDescription($description): void {
        $this->description = $description;
    }
    public function getDescription(): string{
        return $this->description;
    }

    // TYPE
    private function setType($type): void{
        $this->type = $type;
    }
    public function getType(): string{
        return $this->type;
    }

    // BRAND
    private function setBrand($brand): void{
        $this->brand = $brand;
    }
    public function getBrand(): string{
        return $this->brand;
    }

    // IMAGE
    private function setImage($image): void{
        $this->image = $image;
    }
    public function getImage(): string{
        return $this->image;
    }

    // PRICE
    private function setPrice($price): void{
        $this->price = $price;
    }
    public function getPrice(): float{
        return $this->price;
    }
}
