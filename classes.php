<?php

declare(strict_types=1);

/* EXERCISE 1
TODO: Create a class beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.
Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: Print the temperature on the screen.
USE TYPEHINTING EVERYWHERE!
*/

class Beverage 
{
    public string $color;
    public float $price;
    public string $temperature;
    private static string $address = "Melkmarkt 9, 2000 Antwerpen";

    function __construct() 
    {
        $this->temperature = "cold";
    }

    public function getInfo(): String 
    {
        return "This beverage is $this->temperature and $this->color.";
    }

    public static function getAddress(): String 
    {
        return self::$address;
    }

    public function useConst() 
    {
        echo Beer::BARNAME;
    }
}

$beverage = new Beverage();
$beverage->color = "black";
$beverage->price = 2;

echo $beverage->getInfo();
echo "<br>";
echo $beverage->temperature;
echo "<br>";