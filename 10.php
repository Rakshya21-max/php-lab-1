<?php
// Function to check if two strings have equal length
function isEqualLength($str1, $str2) {
    return strlen($str1) === strlen($str2);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Get input from user
    $string1 = $_POST['string1'];
    $string2 = $_POST['string2'];

    // Call function
    $result = isEqualLength($string1, $string2);

    // Display result
    echo "<h3>Result:</h3>";
    echo "First String: $string1 <br>";
    echo "Second String: $string2 <br>";

    if ($result) {
        echo "<b>True</b> → Both strings have the SAME number of characters.";
    } else {
        echo "<b>False</b> → Strings have DIFFERENT number of characters.";
    }
}
?>

<!-- HTML Form for Input -->
<h2>Check Strings Length</h2>
<form method="post">
    Enter First String: <input type="text" name="string1" required><br><br>
    Enter Second String: <input type="text" name="string2" required><br><br>
    <input type="submit" value="Check">
</form>
