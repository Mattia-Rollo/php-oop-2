<?php
require_once 'Product.php';
require_once 'Category.php';
class Food extends Product
{

    public $taste;

    public $quantity;

    public $deadline;

    public $category;

    public function __construct($_name, $_price, $_taste, $_quantity, $_deadline, $_imgPath, Category $_category)
    {
        parent::__construct($_name, $_price, $_imgPath);
        $this->taste = $_taste;
        $this->quantity = $_quantity;
        $this->deadline = $_deadline;
        $this->category = $_category;

    }
}