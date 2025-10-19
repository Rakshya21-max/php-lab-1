<?php
$income=$marital=$gender="";
if(isset($_POST['submit'])){
    $income=$_POST['income'];
    $marital=$_POST['marital'];
    $gender=$_POST['gender'];
    $tax=0;

    if($marital=="married"){
        if($income<=450000) $tax=$income*0.01;
        elseif($income<=550000) $tax=4500+($income-450000)*0.1;
        elseif($income<=750000) $tax=4500+10000+($income-550000)*0.2;
        elseif($income<=1300000) $tax=4500+10000+40000+($income-750000)*0.3;
        else $tax=4500+10000+40000+165000+($income-1300000)*0.35;
    } else {
        if($income<=400000) $tax=$income*0.01;
        elseif($income<=500000) $tax=4000+($income-400000)*0.1;
        elseif($income<=750000) $tax=4000+10000+($income-500000)*0.2;
        elseif($income<=1300000) $tax=4000+10000+50000+($income-750000)*0.3;
        else $tax=4000+10000+50000+165000+($income-1300000)*0.35;
    }
    if($gender=="female") $tax*=0.9;
}
?>

<form method="post">
Income: <input name="income" value="<?=$income?>"><br>
Marital: 
<select name="marital">
<option value="married" <?=($marital=="married")?"selected":""?>>Married</option>
<option value="unmarried" <?=($marital=="unmarried")?"selected":""?>>Unmarried</option>
</select><br>
Gender: 
<select name="gender">
<option value="male" <?=($gender=="male")?"selected":""?>>Male</option>
<option value="female" <?=($gender=="female")?"selected":""?>>Female</option>
</select><br>
<input type="submit" name="submit" value="Calculate">
</form>

<?php if(isset($tax)){ ?>
<h3>Tax Result</h3>
Income: <?=$income?><br>
Marital Status: <?=$marital?><br>
Gender: <?=$gender?><br>
Tax: <?=$tax?>
<?php } ?>
