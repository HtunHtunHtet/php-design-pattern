<?php

include_once('FurryPets.php');

class Cats extends FurryPets
{
    public function __construct()
    {
        echo "Cats " . $this->fourlegs() . "<br/>";
        echo $this->makesSound("Mwehhh ~~ pussy") . "<br/>";
        echo $this->godOfHouse();
    }

    private function godOfHouse()
    {
        return "hehehe" . "<br/>";
    }
}
