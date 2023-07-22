<?php

class Category{

    private $name;

    // CONSTRUCTOR
    public function __construct($name) {
        $this->setName($name);
    }

    // NAME
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}
