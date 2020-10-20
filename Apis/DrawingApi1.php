<?php 

namespace Apis;

use Interfaces\DrawingApi;

class DrawingApi1 implements DrawingApi{
    function drawCircle($x , $y , $radius){
        echo "Api1 Draw Circle at $x , $y with $radius radius\n";
    }
}