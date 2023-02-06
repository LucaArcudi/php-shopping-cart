<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $weight;
    public $date;

    public function __construct(Category $_category, $_brand, $_title, $_description, $_type, $_price, $_image, $_date, $_weight)
    {
        parent::__construct($_category, $_brand, $_title, $_description, $_type, $_price, $_image);

        $this->weight = $_weight;
        $this->date = $_date;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getDate()
    {
        return $this->date;
    }
}
