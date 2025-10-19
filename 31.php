<!DOCTYPE html>
<html>
<body>
<h2>Registration Form</h2>
<form method="post">
Username: <input type="text" name="username" required><br>
Email: <input type="email" name="email" required><br>
DOB: <input type="date" name="dob" required><br>
Phone: <input type="text" name="phone" required><br>
<input type="submit" name="register" value="Register">
</form>

<?php
if(isset($_POST['register'])){
    $u=$_POST['username'];
    $e=$_POST['email'];
    $d=$_POST['dob'];
    $p=$_POST['phone'];
    $err=[];

    if(strlen($u)<8) $err[]="Username min 8 chars";
    if(!filter_var($e,FILTER_VALIDATE_EMAIL)) $err[]="Invalid email";
    if(!strtotime($d)) $err[]="Invalid DOB";
    if(!preg_match('/^[0-9]{10}$/',$p)) $err[]="Phone must be 10 digits";

    if(empty($err)){
        file_put_contents("users.txt","$u,$e,$d,$p\n",FILE_APPEND);
        echo "<p style='color:green;'>Registered Successfully!</p>";
    }else{
        foreach($err as $er) echo "<p style='color:red;'>$er</p>";
    }
}
?>
</body>
</html>
