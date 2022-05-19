
<h1>Compute the sum of the prime numbers less than entered number</h1>
<form name="" method="post" action="">
<input type="number" name="number" value="" placeholder="Enter Number"/>
<input type="submit" name="submit" value="Submit" />
</form>

<?php
	if (isset($_POST['submit'])) {
function isprime($number) {
if ($number==2 or $number==3 or $number==5 or $number==7) {
	 return $number;
}
if ($number==1) {
	 return 0;
}
		elseif ($number%2==1 &&$number%3>=1&&$number%5>=1&&$number%7>=1&&$number%9>=1){
		return $number;
		} else {
			return 0;}
}
$sum = 0;
	for ($i = 0; $i <= $_POST['number']; $i++) {
	$sum += isprime($i);
	}
	echo "The Sum is " . $sum;
		}
?>