<?php
// Function to calculate power
function findPower($voltage, $current) {
    return $voltage * $current;
}

// Example usage
$voltage = 310;
$current = 10;

echo "Voltage = $voltage V <br>";
echo "Current = $current A <br>";
echo "Power = " . findPower($voltage, $current) . " Watts";
?>
