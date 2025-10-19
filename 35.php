<?php
$p=$t=$r=$si="";
if(isset($_POST['submit'])){
    $p=$_POST['p'];
    $t=$_POST['t'];
    $r=$_POST['r'];
    $si = ($p*$t*$r)/100;
}
?>

<form method="post">
Principal: <input name="p" value="<?=$p?>"><br>
Time (years): <input name="t" value="<?=$t?>"><br>
Rate (%): <input name="r" value="<?=$r?>"><br>
<input type="submit" name="submit" value="Calculate">
</form>

<?php if($si!==""){ ?>
<h3>Result</h3>
Principal: <?=$p?><br>
Time: <?=$t?> years<br>
Rate: <?=$r?>%<br>
Simple Interest: <?=$si?>
<?php } ?>
