<?php
//Declare The Constant
define("greeting", "Hello and welcome") ;
define("dob", 01) ;

//Declare The Variables
$word = "When you ask me my age I will tell you," ;
$rich = "That I am Forever Young!" ;
$t = date ('y') ;
$age = $t-dob ;
$country = "Kenya" ;
$a = 2;
$b = 3;

//Display the values
//echo greeting ;
//echo "<br>" ;
//echo "My name is WRX and I was born in $country in the year ";
//echo dob ;
//echo "<br>" ;
//echo $word.$rich;
//echo "<br> This is Because<br>" ;
//if ($t > dob ) {
//    echo "I will always be: $age" ;
//} else {
//    echo "You are too young for this" ;
//}
//
//
//$string1 = 'hello world! ' . $country;
//
//$string2 = "hello world! $country";
//
//echo "<br>";
//
//echo $string1;
//
// echo "<br>";
//
// echo $string2;
//
// echo "<br>";

//if ($a===$b) {
//    echo 'true';
//} else {
//    echo 'false';
//}
echo $a++;
echo "<br>";
echo $b++;

?>

