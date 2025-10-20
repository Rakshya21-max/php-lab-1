<?php
function absoluteDifference($n) {
    $diff = abs($n - 51);

    echo "The given number is: $n.<br>";
    echo "We calculate the absolute difference between $n and 51.<br>";

    if ($n > 51) {
        $tripleDiff = 3 * $diff;
        echo "Since $n is greater than 51, we take triple of the absolute difference.<br>";
        echo "The absolute difference is $diff, and the triple of it is: $tripleDiff.";
    } else {
        echo "Since $n is less than or equal to 51, the absolute difference is: $diff.";
    }
}

// Examples
absoluteDifference(41);

?>
