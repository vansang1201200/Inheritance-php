<?php
include_once("shape.php");
class rectangle extends Shape
{
    public $width;
    public $height;
    public function __construct($name, $height, $width)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea()
    {
        return $this->height * $this->width;
    }
    public function calculatePerimeter()
    {
        return ($this->height + $this->width) * 2;
    }
}
