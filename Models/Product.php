<?php

class Product
{
    public $name;
    public $price;
    public $imgPath;
    public $units;
    private $discount;
    public $peso;
    public function __construct($_name, $_price, $_imgPath)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->imgPath = $_imgPath;

    }

}