<?php
function findIndex($array, $string) {
    $index = array_search($string, $array);

    if ($index !== false) {
        echo "The given array is: [" . implode(", ", $array) . "].<br>";
        echo "The string you searched for is: \"$string\".<br>";
        echo "The index of \"$string\" in the array is: $index.";
    } else {
        echo "The string \"$string\" was not found in the given array.";
    }
}

// Example
$colors = ["black", "brown", "red", "orange"];
findIndex($colors, "red");
?>
