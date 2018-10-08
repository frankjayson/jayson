<?php

class Laptop
{
    public $size = "14inch!";
    private $color = "silver!";
    public $brand = "macbook!";
    public $cost;

    public function getLaptopDetails()

    {
        echo " The laptop is of size `$this->size` It is " . $this->color . " in color,and it is branded by: " . $this->brand;

    }
//    getter & setter.
    public function setBrand($brand)
    {
        $this->Brand = $brand;
    }
     Public function getBrand()
    {
       echo $this ->Brand;
    }


}
$laptop = new Laptop();
//$laptop->color;
echo $laptop->size;
echo $laptop->brand;
//     $laptop->cost= "150,000/=";
//echo $laptop->cost->getLaptopDetails();
$laptop->setBrand("macbook");
$laptop->getBrand();


