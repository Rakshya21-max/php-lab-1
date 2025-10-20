<?php
// Function to check if number is divisible by 5
function isDivisibleByFive($num) {
    return $num % 5 === 0;
}

// Check form submission
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $number = $_POST['number'];

    if (isDivisibleByFive($number)) {
        echo "<b>$number</b> is divisible by 5.";
    } else {
        echo "<b>$number</b> is NOT divisible by 5.";
    }
}
?>

<h2>Check Divisibility by 5</h2>
<form method="post">
    Enter a Number: <input type="number" name="number" required><br><br>
    <input type="submit" value="Check">
</form>
