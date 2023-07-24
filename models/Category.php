<?php

class Category{

    private $name;

    public function __construct(string $name) {
        $this->setName($name);
    }

    // NAME
    public function setName($name): void{
        $this->name = $name;
    }
    public function getName(): string{
        return $this->name;
    }
}
