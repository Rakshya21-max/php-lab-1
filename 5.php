<?php
// Function to calculate triangle area
function triangleArea($base, $height) {
    return 0.5 * $base * $height;
}

// Example usage
$base = 15;
$height = 25;

echo "Base = $base <br>";
echo "Height = $height <br>";
echo "Area of Triangle = " . triangleArea($base, $height);
?>
