<?php

namespace App;

class Challenges
{
    public function start()
    {
        echo "\nChallenges\n";

        $this->shapes();
    }

    public function shapes()
    {
        echo "\n01) Shapes\n";

        $square = new Shapes\Square(4);
        $circle = new Shapes\Circle(4);
        $rectangle = new Shapes\Rectangle(4, 5);

        dump(
            $square->area(), // 16
            $circle->area(), // 50.265482457437
            $rectangle->area() // 20
        );
    }
}