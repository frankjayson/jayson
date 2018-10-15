<?php

{
    class  Building
  public $name:
  public $color;
  public $cost;
  public $contractor;

  public function setName($name)
{
    $this ->name = $timestower;
    return $this;

}

   public function setColor($color)
{

    $this ->color = $gold;
    return$this;

}
    public function setCost($cost)
{
    $this-> cost =$200,000,000;
      return $this;

    }

   echo `The Building is`.$this->name.`it is.$this->color`in color it costs`$this->cost.and it was manufactured by.$this->contractor;

    $building_one = new Building();
    $building_one ->setName("building")->setColor("gold")->setCost(200,000,000)->getBuildingDescription();
    $building->color=(maroon);