<?php

declare(strict_types=1);

/* EXERCISE 3
TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
TODO: Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/

require 'classes.php';

class Beer extends Beverage 
{
    private string $name = "";
    private float $alcoholPercentage = 0;


    public function getAlcoholPercentage(): Float 
    {
        return $this->alcoholPercentage;
    }

    function __contruct(string $name, float $alcoholPercentage) 
    {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    private function beerInfo(): String 
    {
        return "Hi i'm {$this->name} and have 
        an alcochol percentage of {$this->alcoholPercentage} and 
        I have a {$this->color} color.";
    }

    function __destruct() 
    {
        echo self::beerInfo();
    }
}

$beer = new Beer("Duvel", 8.5);
$beer->color = "blond";
$beer->price = 3.5;

echo $beer->getAlcoholPercentage() . "%";
echo "<br>";
echo $beer->color;
echo "<br>";
echo $beer->getInfo();
echo "<br>";

$beer->color = "light";

echo $beer->color;
echo "<br>";