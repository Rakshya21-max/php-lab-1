<!DOCTYPE html>
<html>
<body>
<h2>Upload Profile Image</h2>
<form method="post" enctype="multipart/form-data">
    Select Image (PNG/JPEG, Max 500KB):
    <input type="file" name="image" required><br><br>
    <input type="submit" name="upload" value="Upload">
</form>

<?php
if(isset($_POST['upload'])){
    $f=$_FILES['image'];
    $ext=strtolower(pathinfo($f['name'],PATHINFO_EXTENSION));
    if(($ext=="png"||$ext=="jpg"||$ext=="jpeg") && $f['size']<512000){
        if(!is_dir("uploads")) mkdir("uploads");
        move_uploaded_file($f['tmp_name'],"uploads/".$f['name']);
        echo "<p style='color:green;'>Image uploaded successfully!</p>";
    }else{
        echo "<p style='color:red;'>Error: Only PNG/JPEG under 500KB allowed.</p>";
    }
}
?>
</body>
</html>
