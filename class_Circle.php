<?php
class Circle implements Shape
{
    private $radius;
    function __construct($sides = "")
    {
        $this->radius = $sides["radius"];
    }
    function area()
    {
        return pi() * $this->radius * $this->radius;
    }
    function perimeter()
    {
        return 2 * pi() * $this->radius;
    }
}
