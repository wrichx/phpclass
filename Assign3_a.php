<html>
<head>
    Assignment III
</head>
<body>
<?php
/**
 * Created by wr*
 * Date: 27/09/2018
 * Time: 17:48
 */

//Variables Declaration
$length1 = 10;
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
define("ar_rectangle", $length1 * $width);
define("ar_trapezium", ($length1 + $length2)/2 * $height);

//for Perimeter of shapes
define("per_circle", 2 * pi * $radius);
define("per_square", 2 * $length2 + 2 * $width);
define("per_triangle", $base + $hyp + $height);
define("per_rectangle", 2 * $length1 + 2 * $width);
define("per_trapezium", $length2 + $hyp + $length1 + $hyp);

//shapes array
$shapes = array('circle', 'square', 'triangle', 'rectangle', 'trapezium');

/**
 * calculations
 * Using foreach loop && switch case
 * calculates Area && perimeter of the shapes
 */

foreach ($shapes as $shape) {
    switch ($shape)
    {
        case "circle";
            echo "<br>";
            echo "1. Circle";
            echo "<br>";
            echo "Area: ". ar_circle;
            echo "<br>";
            echo "Perimeter: ". per_circle;
            break;

        case "square";
            echo "<br>";
            echo "2. Square";
            echo "<br>";
            echo "Area : " . ar_square;
            echo "<br>";
            echo "Perimeter : " . per_square;
            break;

        case "triangle";
            echo "<br>";
            echo "3. This is a Triangle";
            echo "<br>";
            echo "Area : ". ar_triangle;
            echo "<br>";
            echo "Perimeter : ". per_triangle;
            break;

        case "rectangle";
            echo "<br>";
            echo "4. This is a Rectangle";
            echo "<br>";
            echo "Area : ". ar_rectangle;
            echo "<br>";
            echo "Perimeter : ". per_rectangle;
            break;

        case "trapezium";
            echo "<br>";
            echo "5. This is a Trapezium";
            echo "<br>";
            echo "Area : ". ar_trapezium;
            echo "<br>";
            echo "Perimeter : ". per_trapezium;
            break;

    }
    echo "<br>";
}

?>

</body>
</html>
