<?php

trait Weight
{
    public $weight;
    public $unit;

    function addWeight($_weight, $_unit)
    {
        $this->weight = $_weight;
        $this->unit = $_unit;
    }
    function getWeight()
    {
        return "Peso: " . $this->weight . " " . $this->unit;
    }
}