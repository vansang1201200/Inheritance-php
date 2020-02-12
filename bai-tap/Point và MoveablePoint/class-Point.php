<?php
    class Point {
        public float $x = 0;
        public float $y = 0;
        public function __construct()
        {
            
        }
       public function getx(){
            return $this->x;
        }
      public  function gety(){
            return $this->y;
        }
      public  function getxy(){
            return $this->x . $this->y;
        }
      public  function setx($x){
          $this->x = $x;
      }
      public  function sety($y){
        $this->y = $y;
    }
    public function setxyx($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function tostring(){
        return $this->x . $this->y;
    }
      
    }

?>