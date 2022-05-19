
			Design a HTML form to accept input data from the user.
		The user should be able to enter:
		● temperature
		● select from o C or o F

		Add another input to your form to allow the user to specify the degree of accuracy e.g. whole number
		answer, 1 decimal place, 2 decimal places etc
		<form action="" method="post">
        <input type="number" name="temperature">
        C<input type="radio" name="units" value="C">
        F<input type="radio" name="units" value="F">
        <select name="accuracy">
		<option value="0">Whole Number</option>
		<option value="1">1 decimal place</option>
		<option value="2">2 decimal places</option>
		<option value="3">3 decimal places</option>
        </select> 
        <input type="submit" name="submit" value="CONVERT">
		</form>
		</body>
		</html>

	<?php

if(isset($_POST['submit'])){
		$temperature = $_POST['temperature'];
		$units = $_POST['units'];
		$accuracy = $_POST['accuracy'];
		if($units == "C"){
			$convertedTemperature = $temperature * 9 / 5 + 32;
			$units = "F";
			} else {
			$convertedTemperature = ($temperature - 32) * 5 / 9;
			$units = "C";
		}
		$convertedTemperature = round($convertedTemperature, $accuracy);
		echo "The converted temperature is $convertedTemperature&deg$units to $accuracy decimal places";
		} 

?>