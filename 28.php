<?php
session_start();

// If already logged in, redirect to welcome page
if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit();
}

// Predefined username & password
$v_username = "pratikshya";
$v_password = "981888";

// Check form submission
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

    if ($username === $v_username && $password === $v_password) {
        // Start session
        $_SESSION['username'] = $username;

        // Set cookie if "Remember Me" is checked
        if ($remember) {
            setcookie("username", $username, time() + (7 * 24 * 60 * 60));
        } else {
            setcookie("username", "", time() - 3600);
        }

        header("Location: welcome.php");
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login with Session & Cookie</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="post">
        Username: 
        <input type="text" name="username" 
               value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" required><br>
        Password: 
        <input type="password" name="password" required><br><br>
        <input type="checkbox" name="remember" <?php if(isset($_COOKIE['username'])) echo "checked"; ?>> Remember Me<br>
        <input type="submit" name="login" value="Login">
    </form>

    <?php
    if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>
</body>
</html>
