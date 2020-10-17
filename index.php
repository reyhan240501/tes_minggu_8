<?php

require 'vendor/autoload.php';
use App\Circle;
use App\Square;
use App\Triangle;

echo (new Square())->getArea().PHP_EOL;
echo (new Triangle())->getArea().PHP_EOL;
echo (new Circle())->getArea().PHP_EOL;
