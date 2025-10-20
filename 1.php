<?php
// Create variables of different datatypes
$intVar = 15;
$floatVar = 12.5;
$stringVar = "Hello PHP";
$boolVar = true;
$arrayVar = array("Ram", "Mita", "Manju");

// Print using echo
echo "Integer: $intVar <br>";
echo "Float: $floatVar <br>";
echo "String: $stringVar <br>";

// Print using print
print "Boolean: " . ($boolVar ? "True" : "False") . "<br>";

// Display array using print_r and var_dump
echo "<br>Using print_r:<br>";
print_r($arrayVar);

echo "<br><br>Using var_dump:<br>";
var_dump($arrayVar);

// Display data types
echo "<br><br>Data Types:<br>";
echo "Integer Type: " . gettype($intVar) . "<br>";
echo "Float Type: " . gettype($floatVar) . "<br>";
echo "String Type: " . gettype($stringVar) . "<br>";
echo "Boolean Type: " . gettype($boolVar) . "<br>";
echo "Array Type: " . gettype($arrayVar) . "<br>";
?>
