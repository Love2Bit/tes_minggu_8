<?php

namespace line;

use line\Shape;



class Circle extends Shape
{
    private $radius=28;

    public function getArea()
    {
        return $this->radius/2;
    }
}
// $coba= new Circle("white");
// var_dump($coba);
?>
