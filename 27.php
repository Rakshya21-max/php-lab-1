<!DOCTYPE html>
<html>
<head>
    <title>Simple Login</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">
    Username: 
    <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>" required>
    <br>

    Password: 
    <input type="password" name="password" required>
    <br>

    <input type="submit" name="login" value="Login">
</form>

<?php
if (isset($_POST['login'])) {
    // Predefined username and password
    $valid_username = "pratikshya";
    $valid_password = "981888";

    // Get input values
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate login
    if ($username == $valid_username && $password == $valid_password) {
        echo "<h5 style='color:green;'>Login Successfull</h5>";
    } else {
        echo "<h5 style='color:red;'>Invalid Username or Password</h5>";
    }
}
?>

</body>
</html>
