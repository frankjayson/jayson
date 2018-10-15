<?php

{
    class  Furniture
  public $name:
  public $color;
  public $cost;
  public $manufacturer;

  public function setName($name)
{
    $this ->name = $name;
    return $this;

}

   public function setColor($color)
{

    $this ->color = $color;
    return$this;

}
    public function setCost($cost)
{
    $this-> cost =$cost;
    return $this;

}

   echo `The Furniture is`.$this->name.`it is.$this->color`in color it costs`$this->cost.and it was manufactured by.$this->manufacturer;

    $furniture_one = new Furniture();
    $furniture_one ->setName("chair")->setColor("maroon")->setCost(20,000)->getFurnitureDescription();
    $furniture->color=(maroon);