<!DOCTYPE html>
<html>
<head>
    <title>Largest Number</title>
</head>
<body>
    <h2> Largest Number</h2>

    <form method="post">
        Enter first number: <input type="number" name="num1" required><br>
        Enter second number: <input type="number" name="num2" required><br>
        Enter third number: <input type="number" name="num3" required><br>
        <input type="submit" name="submit" value="Find Largest">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $c = $_POST['num3'];

        if ($a >= $b && $a >= $c) {
            echo "<h3>Largest Number: $a</h3>";
        } elseif ($b >= $a && $b >= $c) {
            echo "<h3>Largest Number: $b</h3>";
        } else {
            echo "<h3>Largest Number: $c</h3>";
        }
    }
    ?>
</body>
</html>
