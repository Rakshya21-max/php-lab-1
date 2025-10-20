<?php
// Function to convert minutes to seconds
function convertToSeconds($minutes) {
    return $minutes * 60;
}

// Example usage
$minutes = 12;
echo "$minutes minutes = " . convertToSeconds($minutes) . " seconds";
?>
