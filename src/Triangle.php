<?php

namespace App;
use App\shape;

class Triangle extends Shape
{
    private $base=10;
    private $height=12;

    public function getArea()
    {
        return .5*$this->base*$this->height;
    }
}

?>