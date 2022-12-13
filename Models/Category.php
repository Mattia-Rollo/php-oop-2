<?php

class Category
{
    private $id;
    public $name;

    public function __construct($_name)
    {
        $this->name = $_name;
    }
}