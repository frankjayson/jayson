<?php
Class PublicVans

{
    public $van_colour;
    public $passengers_size = "52";
        public $company = "Isuzu";

        public function rules()
        {
            echo "Welcome to the types of PublicVans.</br>";
        }
    }

$public_vans= new PublicVans();
$public_vans ->van_colour ="chocolate";
$public_vans ->passengers_size ="52";
echo $bossname_second ->van_colour . "</br>";
echo $bossname_second ->passengers_size . "</br>";
