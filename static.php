<?php

declare(strict_types=1);

/* EXERCISE 7
Copy your solution from exercise 6
TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.
Use typehinting everywhere!
*/

require 'classes.php';

class Beer extends Beverage 
{
    private string $name;
    private float $alcoholPercentage = 0;
    const BARNAME = "Het Vervolg";

    public function getAlcoholPercentage(): Float 
    {
        return $this->alcoholPercentage;
    }

    function __contruct(string $name, float $alcoholPercentage) 
    {
        $this->temperature = "cold";
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    function useConstInHere() 
    {
        echo self::BARNAME;
    }
}

$beer = new Beer("Duvel", 8);

echo Beer::BARNAME;
echo "<br>";
$beer->useConst();
echo "<br>";
$beer->useConstInHere();
echo "<br>";
echo Beer::getAddress();
echo "<br>";
echo $beer->getAddress();