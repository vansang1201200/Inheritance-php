 <?php
    include_once("./classPoint2D.php");
    class classPoint3D extends classPoint2D
    {
        public $z;
        public function __construct()
        {
        }

        public function get_z()
        {
            return $this->z;
        }

        public function get_xyz()
        {
            return array($this->x, $this->y, $this->z);
        }

        public function set_z($z)
        {
            $this->z = $z;
        }

        public function set_xyz($x, $y, $z)
        {
            parent::set_xy($x, $y);
            $this->z = $z;
        }
        
        public function show1()
        {
            return  $this->x .  $this->y . $this->z;
        }
    }

    ?>