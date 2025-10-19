<!DOCTYPE html>
<html>
<head>
    <title>Add First 3 Characters</title>
</head>
<body>
    <h2> Add First 3 Characters</h2>

    <form method="post">
        Enter a string: <input type="text" name="string" required><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $str = $_POST['string'];
        $firstThree = substr($str, 0, 3);
        $result = $firstThree . $str . $firstThree;

        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>