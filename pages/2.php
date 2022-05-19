
	<h2>Calculate Amstrong Number</h2>
	<form name="" method="post" action="">
<input type="number" name="digit" value="" id="" maxlength="6" placeholder="enter number" />
<input type="submit" name="submit" value="submit" />
		</form>
<?php
if (isset($_POST['submit'])) {
$b = $_POST['digit'];
$number = str_split($b);
$length = strlen($b);
$sum = 0;
for ($i = 0; $i < $length; $i++) {
	$sum = $sum + pow($number[$i],$length);
}
if ($sum == $b) {
	echo $b . " is Armstrong number";
} else {
echo $b . " is not Armstrong number";
}
}
?>
<p>153, 370, 371, 407, 1634, 8208, 9474...<p/>
</body>
</html>
