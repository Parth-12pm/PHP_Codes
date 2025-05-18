<?php

class rectangle
{
    public $width;
    public $height;

    function __construct($w, $h)
    {
        $this->height = $h;
        $this->width = $w;
    }

    function area()
    {
        $result = $this->width * $this->height;
        echo "Area of rectangle :" . $result;
    }
};

$rect = new rectangle(10, 20);
$rect->area();
