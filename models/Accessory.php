<?php
require_once __DIR__ . '/Product.php';

class Accessory extends Product
{
    public $color;
    public $material;
    public $typeAccessory;

    public function __construct(Category $_category, $_brand, $_title, $_description, $_type, $_price, $_image, $_color, $_material, $type)
    {
        parent::__construct($_category, $_brand, $_title, $_description, $_type, $_price, $_image);

        $this->color = $_color;
        $this->material = $_material;
        $this->typeAccessory = $_type;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function getTypeAccessory()
    {
        return $this->typeAccessory;
    }
}
