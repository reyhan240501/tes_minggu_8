<?php

namespace App;
use App\shape;

class Circle extends Shape
{
    private $radius=28;

    public function getArea()
    {
        return pi()*$this->radius/2;
    }
}
echo (new Circle())->getArea();

?>