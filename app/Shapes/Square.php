<?php

namespace App\Shapes;

class Square implements ShapeInterface
{
    private $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function area() : float
    {
        return $this->length * $this->length;
    }
}