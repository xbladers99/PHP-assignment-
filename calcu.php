<?php

$x=$_POST["first"];
$y=$_POST["second"];
$z=$_POST["operation"];


if ($z == "+") {
	$res=$x+$y;
    echo "sum is ". $res;
}


else if ($z == "-") {
	$res=$x-$y;
    echo "difference is ".$res;
}

else if ($z == "*") {
   	$res=$x*$y;
    echo "product is ".$res;
}


else {
    	$res=$x/$y;
    echo "division is ".$res;
}


?>
