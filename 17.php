<?php
function sumOrTriple($a, $b) {
    if ($a == $b) {
        $result = 3 * ($a + $b);
        echo "The given numbers are $a and $b, and since they are the same, the triple of their sum is: $result.";
    } else {
        $result = $a + $b;
        echo "The given numbers are $a and $b, and their sum is: $result.";
    }
}

// Example
sumOrTriple(10, 10);

echo "<br>";

sumOrTriple(9, 10);
?>
