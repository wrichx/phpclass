<?php
/**
 * Created by PhpStorm.
 * User: wrx
 * Date: 24/09/2018
 * Time: 22:18
 * This demonstrates the use of if, if else, switch and arrays.
 * There is also a demo on operators and functions
 */
//Rental Houses

//declaring variables
$house = "bedsitter";
$house1 = "one bedroom";
$house2 = "Flat";
$house3 = "apartment";
$rent = 15000;
$house_rent = 25000;
$number = 5.732456;
$length = 10;
$width = 10;
$area = $length * $width;

//if statement
if ($house == "bedsitter");
echo "Your monthly payment plan will be: $rent";
echo "<br>";

//switch
switch ($house_rent)
{
    case 15000;
        echo "this will afford $house";
        break;
        echo "<br>";
    case 20000;
        echo "This will afford $house1";
        break;
        echo "<br>";
    case 25000;
        echo "This will afford $house2";
        break;
        echo "<br>";
    case 30000;
        echo "This will afford $house3";
        break;
        echo "<br>";
    case 35000;
        echo "This is now your level";
        break;
        echo "<br>";
    default;
        echo "Otherwise you are searching the wrong places";
        echo "<br>";
}

// if else statement

    echo "<br>";

if ($number <= 4.732456)
  {
    echo ceil($number) . "<br>";
  } elseif ($number != 4)
  {
      echo floor($number) . "<br>";
  } else
  {
      echo "The trick is in the sequence";
  }

//comparison of two values

if ($length === $width)
   {
       echo "This is a square and I shall not work on it!";
   } else
   {
       echo $area;
   }
?>







