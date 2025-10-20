<?php
function stringLength($str) {
    if ($str === "") {
        return 0; // Base case: empty string
    }
    return 1 + stringLength(substr($str, 1)); // Recursive call
}

// Example
$input = "Hey What's up";
$length = stringLength($input);
echo "The given string is: \"$input\" and the total length of the string is $length.";
?>
