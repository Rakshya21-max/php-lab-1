<!DOCTYPE html>
<html>
<head>
    <title>Convert to Uppercase</title>
</head>
<body>
    <h2> to Uppercase</h2>

    <form method="post">
        Enter a string: <input type="text" name="string" required><br>
        <input type="submit" name="submit" value="Convert">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $str = $_POST['string'];
        $len = strlen($str);

        if ($len < 3) {
            $result = strtoupper($str);
        } else {
            $firstPart = substr($str, 0, $len - 3);
            $lastPart = strtoupper(substr($str, -3));
            $result = $firstPart . $lastPart;
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
