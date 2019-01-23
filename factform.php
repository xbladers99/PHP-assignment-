<?php

$y=$_POST["firstname"];

$fact=1;


for ($x = 1; $x <= $y; $x++) {
    $fact=$fact*$x;
} 

echo "factorial of ".$y." is ".$fact;
?>
