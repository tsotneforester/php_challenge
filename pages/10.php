
	
			Your challenge is to list all of the multiples of number1 which are less than or equal to number2.
		You must complete this task twice, once using a FOR loop and once using a WHILE loop.
		The multiples of 6 are 6, 12, 18, 24, 30, 36, 42, 48, 54, and 60
<form name="" method="post" action="">
	<input type="number" name="digit1" value="" id=""  max="1000" placeholder="number1" />
	<input type="number" name="digit2" value="" id=""  max="1000" placeholder="number2" />
<input type="submit" name="submit" value="submit" />
</form>
</body>
</html>


<?php

	if (isset($_POST['submit'])) {
	
	$dig1 = $_POST['digit1'];
	$dig2 = $_POST['digit2'];

	for($i = $dig1; $i <= $dig2; $i += $dig1){
		echo $i . "<br>";
	}
	
/*
		$j = 6;
	while($j <= 60){
	echo $j . "<br>";
	$j += 6;
	}
*/
	}
?>



	


