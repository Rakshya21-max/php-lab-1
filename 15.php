<?php
function getValueByIndex($array, $index) {
    if (isset($array[$index])) {
        echo "The value at index $index is: " . $array[$index] . ".";
    } else {
        echo "Index $index does not exist in the given array.";
    }
}
// Example
$colors = ["Red", "Blue", "Green", "Yellow"];
getValueByIndex($colors, 2);
?>

