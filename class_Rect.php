<?php
class Rect implements Shape
{
    private $width;
    private $height;
    function __construct($sides = "")
    {
        $this->width = $sides["width"];
        $this->height = $sides["height"];
    }
    function area()
    {
        return $this->width * $this->height;
    }
    function perimeter()
    {
        return 2 * ($this->width + $this->height);
    }
}
