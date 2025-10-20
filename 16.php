<?php
function carsNeeded($people) {
    $cars = ceil($people / 5); // Each car can carry 5 people
    echo "For $people people, you will need $cars car(s) to seat everyone comfortably.";
}

// Example
carsNeeded(10);

echo "<br>";

carsNeeded(15);
?>
