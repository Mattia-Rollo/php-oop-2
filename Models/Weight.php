<?php

trait Weight
{
    public $weight;
    public $unit;

    function addWeight($_weight, $_unit)
    {
        $this->weight = $_weight;
        $this->unit = $_unit;
        return $this->weight . " " . $this->unit;
    }
}