<?php

include_once 'Product.php';

class AnimalHouse extends Product
{
    public function __construct($_name, $_price, $_imgPath, $_category)
    {
        parent::__construct($_name, $_price, $_imgPath, $_category);

    }
}