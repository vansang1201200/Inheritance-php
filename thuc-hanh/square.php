<?php
include_once("rectangle.php");
class square extends rectangle
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width,$width);
    }
}
