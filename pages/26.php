
IT’S GETTING HOT IN HERE
		The temperatures in degrees C were recorded in January 2015 as follows: <br>
		<form name="" method="post" action="">
		32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0, 36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2, 29.1, 28.6, 30.6 <br>
		Write a script to output the following: <br>
		● average daily temperature in degrees C (rounded to 1 decimal place);<br>
		● the <input type="number" name="numberx" value="" id=""  max="30" placeholder="X" /> lowest temperatures; <br>
		● the <input type="number" name="numbery" value="" id=""  max="30" placeholder="Y" />highest temperatures;<br>
		
		

		


<input type="submit" name="submit" value="submit" />
</form>

<?php
	
	if (isset($_POST['submit'])) {
	$numberx = $_POST['numberx'];
	$numbery = $_POST['numbery'];
	
	$temperatures = [32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0, 36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2, 29.1, 28.6, 30.6];
	$sum = array_sum($temperatures);
	$count = count($temperatures);
	$averageTemperature = $sum / $count;
	$roundedAverage = round($averageTemperature, 1);
	sort($temperatures);
	$lowestTemperatures = array_slice($temperatures, 0, $numberx);
	$lowestTemperatures = implode(", ", $lowestTemperatures);
	$highestTemperatures = array_slice($temperatures, -$numbery, $numbery);
	$highestTemperatures = implode(", ", $highestTemperatures);
	echo "The average daily temperature is " . $roundedAverage;
	echo "<br>";
	echo "The " . $numberx .  " lowest temperatures are " . $lowestTemperatures;
	echo "<br>";
	echo "The " . $numbery .  " highest temperatures are " . $highestTemperatures;

	}


?>
