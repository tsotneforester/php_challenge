
		Your challenge is to loop through the numbers 1 to 100.
		If a number is a multiple of 3 then output FIZZ instead of the number.
		If a number is a multiple of 5 then output BUZZ instead of the number.
		If a number is a multiple of both 3 and 5 then output FIZZ BUZZ instead of the number.
		Your output will look something like this:

<form name="" method="post" action="">
<input type="number" name="number" value="" id=""  max="1000" placeholder="Insert number" />
<input type="submit" name="submit" value="submit" />
</form>
		

</body>
</html>


<?php
	if (isset($_POST['submit'])) {
	
	 $number = $_POST['number'];
	
		for($i = 1; $i <= $number; $i++){
		if($i % 3 == 0 && $i % 5 == 0){
			echo "FIZZ BUZZ";
			} else if ($i % 3 == 0){
			echo "FIZZ";
			} else if($i % 5 == 0){
			echo "BUZZ";
			} else {
			echo $i;
		}
		echo "<br>";
	}

	}

	

?>