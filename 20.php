<?php
function frontTwoCopies($str) {
    // Check if string length is less than 2
    if (strlen($str) < 2) {
        return $str;
    } else {
        // Take first 2 characters
        $front = substr($str, 0, 2);
        // Repeat 4 times
        return str_repeat($front, 4);
    }
}

// Example usage
$strings = ["pratikshya", "hey", "He"];

foreach ($strings as $s) {
    $result = frontTwoCopies($s);
    echo "Original string: \"$s\"<br>";
    echo "Processed string: \"$result\"<br><br>";
}
?>
