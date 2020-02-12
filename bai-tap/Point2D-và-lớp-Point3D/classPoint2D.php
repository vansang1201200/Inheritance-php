<?php 
 class classPoint2D {
  public float $x;
  public float $y;

  public function __construct()
  {
   
  }

    public function get_x() {
        return $this->x;
    }

    public function get_y() {
        return $this->y;
    }

    public function get_xy(){
        return array($this->x,$this->y);
    }

    public function set_x($x){
        $this->x = $x;
    }

    public function set_y($y){
        $this->y = $y;
    }

    public function set_xy($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    
    public function show(){
        return $this->x . $this->y;
    }
 }
