<?php
/**
 * Created by PhpStorm.
 * User: wrx
 * Date: 27/09/2018
 * Time: 12:14
 * Assignment 3
 */
//Variables Declaration
$length1 = 10;
$length = 1;
$length2 = 5;
$width = 5;
$radius = 4;
$hyp = 12;
$height = 10;
$base = 3;

//Constants declaration
//for Area of shapes
define("pi", 3.17);
define("ar_circle", pi * $radius * $radius);
define("ar_square", $length2 * $width);
define("ar_triangle", 0.5 * $base * $height);
define("ar_rectangle", $length * $width);

//for Perimeter of shapes
define("per_circle", 2 * pi * $radius);
define("per_square", 2 * $length2 + 2 * $width);
define("per_triangle", $base + $hyp + $height);
define("per_rectangle", 2 * $length1 + 2 * $width);


//Array for do while loop calculations

$maths = array(
    'ar_circle',
    'per_circle',
    'ar_square',
    'per_square',
    'ar_triangle',
    'per_triangle',
    'ar_rectangle',
    'per_rectangle',
);

$maths[6] = 5;

    do
        {
            echo "The area of the rectangle is:". ar_rectangle;
            $maths++;
       }
    while ($maths[6] <= 4);

echo "<br>";

//for loop

//echo "<center>";
for ($i=0;$i<=10;$i++)
    {
        for($x=0; $x<=$i; $x++)
          {
              echo "*";
          }
echo "<br>";
    }

//Function to start a car

function startCar($value1, $value2){
    $process = $value1 . $value2;
    echo "To start a car you need: ";
}
$value1 = "step on break_pedal";
$value2 = "push ignition button to start";

// Calling function

startCar($value1, $value2);