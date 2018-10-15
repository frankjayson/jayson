<?php
class Sports
{
    public function sportCategories()
    {
        echo "football,basketball,cricket,tennis";
    }
    public function regionalParticipants()
    {
        echo "Asian,Africa,Europe";
    }
}
$worldsports =new Sports();
$worldsports->sportsCategories();
$worldsports->regionalParticipants();