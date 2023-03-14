<?php

declare(strict_types=1);

/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
USE TYPEHINTING EVERYWHERE!
*/

require 'classes.php';

class Beer extends Beverage 
{
    protected string $name;
    protected float $alcoholPercentage = 0;

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
}

$beer = new Beer("Duvel", 8);
$beer->color = "blond";
$beer->price = 3.5;

echo $beer->getAlcoholPercentage() . "%";
echo "<br>";
echo $beer->color;
echo "<br>";
echo $beer->getInfo();
echo "<br>";