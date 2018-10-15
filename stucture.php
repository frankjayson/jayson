<?php
Class Bossname

{
    public $skin_colour;
    public $hairstyle = "Jordan";
    public $bodysize;

    public function rules()
    {
        echo "Welcome to the rules 1 of this comapny .</br>";
    }
}

$bossname_second = new Bossname();
$bossname_second ->skin_colour ="chocolate";
$bossname_second ->body_size ="tall";
echo $bossname_second ->skin_colour . "</br>";
echo $bossname_second ->bodysize . "</br>";