<?php

namespace Abstracts;

use Interfaces\DrawingApi;

abstract class Shape{
    protected $drawApi;

    protected function __construct(DrawingApi $drawApi){
        $this->drawApi = $drawApi;
    }
    
    public abstract function draw();
    public abstract function resizeByPercentage($pct);
}