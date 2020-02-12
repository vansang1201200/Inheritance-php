<?php
class Circle {
    public $name;
    public $color;
    public $radius;
    public function __construct($name,$color,$radius)
    {
        $this->name = $name;
        $this->color = $color;
        $this->radius = $radius;
    }

    public function get_name(){
        return $this->name;
    }
    public function get_color(){
        return $this->color;
    
    }
    public function get_radius(){
        return $this->radius;
    }
    public function set_name($name){
        $this->name = $name;
    }
    public function set_color($color){
        $this->color = $color;
    }
    public function set_radius($radius){
        $this->radius = $radius;
    }
    

    public function perimeter(){
        return pi() * 2 * $this->radius;
    }

    public function acreage(){
        return pi() * ($this->radius ** 2);
    
    } 
}

class Cylinder extends Circle
{
    public $height;
   
    public function __construct($name,$color,$radius,$height)
    {
        parent::__construct($name,$color,$radius);
        $this->height = $height;
        
    }
    public function cylindrical_volume(){
        return  parent::acreage() * $this->height;
    }
}


?>