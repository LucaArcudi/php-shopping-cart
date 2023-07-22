<?php

require_once __DIR__ . "/Category.php";

class Product{

    protected $name;
    protected $category;
    protected $description;
    protected $type;
    protected $brand;
    protected $image;
    protected $price;

    public function __construct($name, Category $category, $description, $type, $brand, $image , $price){
        $this->setName($name);
        $this->setCategory($category);
        $this->setDescription($description);
        $this->setType($type);
        $this->setBrand($brand);
        $this->setImage($image);
        $this->setPrice($price);
    }

    // NAME
    public function setName($name) {
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    // CATEGORY
    public function setCategory($category) {
        $this->category = $category;
    }
    public function getCategory(){
        return $this->category;
    }

    // DESCRIPTION
    public function setDescription($description) {
        $this->description = $description;
    }
    public function getDescription(){
        return $this->description;
    }

    // TYPE
    public function setType($type){
        $this->type = $type;
    }
    public function getType(){
        return $this->type;
    }

    // BRAND
    public function setBrand($brand){
        $this->brand = $brand;
    }
    public function getBrand(){
        return $this->brand;
    }

    // IMAGE
    public function setImage($image){
        $this->image = $image;
    }
    public function getImage(){
        return $this->image;
    }

    // PRICE
    public function setPrice($price){
        $this->price = $price;
    }
    public function getPrice(){
        return $this->price;
    }
}
