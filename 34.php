<?php
// Initialize variables
$name=$roll=$sub1=$sub2=$sub3=$sub4=$sub5="";
$total=$percent=$grade="";

// Process form when submitted
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    $sub5 = $_POST['sub5'];

    // Calculate total and percentage
    $total = $sub1+$sub2+$sub3+$sub4+$sub5;
    $percent = $total/5;

    // Determine grade
    if($percent>=80) $grade="Distinction";
    elseif($percent>=60) $grade="First Division";
    elseif($percent>=45) $grade="Second Division";
    elseif($percent>=35) $grade="Third Division";
    else $grade="Fail";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Marksheet Generator</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        input { margin: 5px 0; }
        table { border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 8px 12px; text-align: center; }
    </style>
</head>
<body>

<h2>Student Details</h2>
<form method="post">
    Name: <input type="text" name="name" value="<?=$name?>" required><br>
    Roll No: <input type="text" name="roll" value="<?=$roll?>" required><br>
    Maths : <input type="number" name="sub1" value="<?=$sub1?>" required><br>
   Science : <input type="number" name="sub2" value="<?=$sub2?>" required><br>
   Social : <input type="number" name="sub3" value="<?=$sub3?>" required><br>
    Health : <input type="number" name="sub4" value="<?=$sub4?>" required><br>
    Nepali : <input type="number" name="sub5" value="<?=$sub5?>" required><br>
    <input type="submit" name="submit" value="Generate Marksheet">
</form>

<?php if(isset($_POST['submit'])){ ?>
    <h2>Marksheet</h2>
    <table>
        <tr>
            <th>Student Name</th>
            <td><?=$name?></td>
        </tr>
        <tr>
            <th>Roll No</th>
            <td><?=$roll?></td>
        </tr>
        <tr>
            <th>Maths</th>
            <td><?=$sub1?></td>
        </tr>
        <tr>
            <th>Science</th>
            <td><?=$sub2?></td>
        </tr>
        <tr>
            <th>Social</th>
            <td><?=$sub3?></td>
        </tr>
        <tr>
            <th>Health</th>
            <td><?=$sub4?></td>
        </tr>
        <tr>
            <th>Nepali</th>
            <td><?=$sub5?></td>
        </tr>
        <tr>
            <th>Total Marks</th>
            <td><?=$total?></td>
        </tr>
        <tr>
            <th>Percentage</th>
            <td><?=$percent?>%</td>
        </tr>
        <tr>
            <th>Grade</th>
            <td><?=$grade?></td>
        </tr>
    </table>
<?php } ?>

</body>
</html>
