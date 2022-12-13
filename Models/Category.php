<?php

class Category
{
    public $id;
    public $name;

    public function __construct($_name)
    {
        $this->name = $_name;
    }
    public function setId()
    {
        if ($this->name = "Cane") {
            $this->id = 1;
        } elseif ($this->name = "Gatto") {
            $this->id = 2;
        }
    }
}