<?php
function calculateArea($base, $height, $shape) {
    $shape = strtolower($shape); // Convert to lowercase for consistency

    if ($shape == "triangle") {
        $area = 0.5 * $base * $height;
        echo "The given shape is: Triangle.<br>";
        echo "The base is: $base and the height is: $height.<br>";
        echo "Using the formula (1/2 × base × height), the area of the triangle is: $area.";
    } elseif ($shape == "parallelogram") {
        $area = $base * $height;
        echo "The given shape is: Parallelogram.<br>";
        echo "The base is: $base and the height is: $height.<br>";
        echo "Using the formula (base × height), the area of the parallelogram is: $area.";
    } else {
        echo "Invalid shape! Please enter either 'triangle' or 'parallelogram'.";
    }
}

// Example
calculateArea(12.5, 5, "triangle");

echo "<hr>";

calculateArea(12.5, 6.8, "parallelogram");
?>
