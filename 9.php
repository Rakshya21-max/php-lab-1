<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Get user input
    $wins = $_POST['wins'];
    $draws = $_POST['draws'];
    $losses = $_POST['losses'];

    // Function to calculate total points
    function footballPoints($wins, $draws, $losses) {
        return ($wins * 3) + ($draws * 1) + ($losses * 0);
    }

    // Calculate total points
    $totalPoints = footballPoints($wins, $draws, $losses);

    // Display result
    echo "<h3>Football Team Points</h3>";
    echo "Wins = $wins <br>";
    echo "Draws = $draws <br>";
    echo "Losses = $losses <br>";
    echo "<b>Total Points = $totalPoints</b><br><br>";
}
?>

<!-- HTML Form to take user input -->
<h2>Football Points Calculator</h2>
<form method="post">
    Enter Wins: <input type="number" name="wins" required><br><br>
    Enter Draws: <input type="number" name="draws" required><br><br>
    Enter Losses: <input type="number" name="losses" required><br><br>
    <input type="submit" value="Calculate Points">
</form>
