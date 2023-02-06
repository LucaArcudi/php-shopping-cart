<?php

require_once __DIR__ . "/Category.php";

class Product
{
    //campi
    // caratteristiche tipiche
    public $category;
    public $title;
    public $price;
    public $description;
    public $type;
    public $brand;
    public $image;

    // costruttore
    function __construct(Category $_category, $_brand, $_title, $_description, $_type, $_price, $_image)
    {
        // inizializza una nuova instanza di tipo product
        $this->brand = $_brand;
        $this->title = $_title;
        $this->description = $_description;
        $this->price = $_price;
        $this->type = $_type;
        $this->image = $_image;
        $this->category = $_category;
    }

    // metodi
    // capacità condivise

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getImage()
    {
        return $this->image;
    }
}
