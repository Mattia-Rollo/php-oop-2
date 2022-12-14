<?php

require_once 'Product.php';

class Toy extends Product
{
    public function __construct($_id, $_name, $_price, $_imgPath, $_category)
    {
        parent::__construct($_id, $_name, $_price, $_imgPath, $_category);
    }
}