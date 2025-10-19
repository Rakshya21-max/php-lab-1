<!DOCTYPE html>
<html>
<head>
    <title>Upload CV</title>
</head>
<body>
<h2>Upload Your CV</h2>
<form method="post" enctype="multipart/form-data">
    Select CV (PDF/DOCX, Max 1MB):
    <input type="file" name="cv" required><br><br>
    <input type="submit" name="upload" value="Upload">
</form>

<?php
if(isset($_POST['upload'])) {
    $file = $_FILES['cv'];
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    if(($ext=="pdf" || $ext=="doc" || $ext=="docx") && $file['size'] < 1048576) {
        if(!is_dir("uploads")) mkdir("uploads");
        move_uploaded_file($file['tmp_name'], "uploads/".$file['name']);
        echo "<p style='color:green;'>CV uploaded successfully!</p>";
    } else {
        echo "<p style='color:red;'>Error: Only PDF/DOCX files under 1MB are allowed.</p>";
    }
}
?>
</body>
</html>
