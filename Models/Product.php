<?php
require_once 'Category.php';
class Product
{
    public $id;
    public $name;
    public $price;
    public $imgPath;

    public $category;
    public $units;
    private $discount;
    public $peso;
    public function __construct($_id, $_name, $_price, $_imgPath, Category $_category)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->price = $_price;
        $this->imgPath = $_imgPath;
        $this->category = $_category;

    }

}