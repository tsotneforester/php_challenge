


		You need to generate a random number between any set limits you choose.
		If the random number is an even number then echo “The random number is even.”
		If the random number is an odd number then echo “The random number is odd.”
		


<form name="" method="post" action="">
<input type="submit" name="submit" value="submit" />
</form>
		

</body>
</html>


<?php
	
	if (isset($_POST['submit'])) {
		
	}
		$odds = 0;
	$evens = 0;
	for($i = 1; $i <= 100; $i++){
		$randomNumber = rand(1, 100);
		if ($randomNumber % 2 == 0) {
			$evens++;
			} else {
			$odds++;
		}
	}
	echo "There were $evens even numbers and $odds odd numbers";

	

?>