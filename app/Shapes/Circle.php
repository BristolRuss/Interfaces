<?php

namespace App\Shapes;

class Circle implements ShapeInterface
{
    private $radius;
    private $radiusSquare;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area() : float
    {
        $this->radiusSquare = $this->radius * $this->radius;
        return pi() * $this->radiusSquare;
    }
}