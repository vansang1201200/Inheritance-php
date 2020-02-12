<?php
class Triangle
{
    private $side1 = 1.0;
    private $side2 = 1.0;
    private $side3 = 1.0;

    public function __construct($side1, $side2, $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function get_side1()
    {
        return $this->side1;
    }

    public function get_side2()
    {
        return $this->side2;
    }

    public function get_side3()
    {
        return $this->side3;
    }

    public function set_side1($side1)
    {
        $this->side1 = $side1;
    }

    public function set_side2($side2)
    {
        $this->side2 = $side2;
    }

    public function set_side3($side3)
    {
        $this->side3 = $side3;
    }

    public function getPerimeter()
    {
        return ($this->side1 + $this->side2 + $this->side3);
    }

    public function getArea()
    {
        $P = $this->getPerimeter() / 2;
        return pow($P * ($P - $this->side1) * ($P - $this->side2) * ($P - $this->side3), 0.5);
    }

    public function toString(){
        return ' <br> chu vi :' .$this->getPerimeter().' <br>diện tích ' . $this->getArea();
    }
}
