<?php

declare(strict_types=1);

/* EXERCISE 6
Copy the classes of exercise 2.
TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.
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
