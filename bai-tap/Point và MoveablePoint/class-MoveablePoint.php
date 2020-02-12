<?php
    include_once("./class-Point.php");
    class MoveablePoint extends Point{
        public $xS = 0;
        public $yS = 0;
        public function __construct()
        {
            
        }
        public function getxS(){
            return $this->xS;
        }
        public function getYs(){
            return $this->yS;
        }
        public function getSpeed() {
            return  array($this->xS . $this->yS);
        }
        public function setxS($xS){
            $this->xS = $xS;
        }
        public function setyS($yS){
            $this->yS = $yS;
        }
        public function setSpeed($xS,$yS){
            $this->xS = $xS;
            $this->yS = $yS;
        }
        public function tostring(){
           return "$this->x, $this->y , speed = $this->xS, $this->yS";
        }
        public function move(){
            $this->x += $this->xS;
            $this->y += $this->yS;
            return array($this->x, $this->y);
        }
    }
       
    

    
    
?>