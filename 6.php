<?php
// Function to convert age into days
function ageInDays($years) {
    return $years * 365;
}

// Example usage
$age = 21;

echo "Age = $age years <br>";
echo "Age in Days = " . ageInDays($age) . " days";
?>
