<?php

require ("./autoload.php");

use Shapes\Circle;
use Apis\DrawingApi1;
use Apis\DrawingApi2;

$shapes = [
    new Circle(1,20,30,new DrawingApi1()),
    new Circle(1,15,10,new DrawingApi2())
];

foreach ($shapes as $key => $shape) {
    $shape->resizeByPercentage(2.5);
    $shape->draw();
}