<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $chickens = $_POST['chickens'];
    $cows = $_POST['cows'];
    $pigs = $_POST['pigs'];

    // Calculate total legs
    $totalLegs = ($chickens * 2) + ($cows * 4) + ($pigs * 4);

    echo "Chickens = $chickens <br>";
    echo "Cows = $cows <br>";
    echo "Pigs = $pigs <br>";
    echo "<b>Total Legs = $totalLegs</b><br><br>";
}
?>

<!-- HTML Form for user input -->
<form method="post">
    Chickens: <input type="number" name="chickens" required><br><br>
    Cows: <input type="number" name="cows" required><br><br>
    Pigs: <input type="number" name="pigs" required><br><br>
    <input type="submit" value="Calculate Legs">
</form>
