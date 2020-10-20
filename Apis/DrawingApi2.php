<?php 

namespace Apis;

use Interfaces\DrawingApi;

class DrawingApi2 implements DrawingApi{
    function drawCircle($x , $y , $radius){
        echo "Api2 Draw Circle at $x , $y with $radius radius\n";
    }
}