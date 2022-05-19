


		This challenge tests your ability to research the ROUND() function and use it in context.
		Your task is to calculate the area of a circle using the PI() function and a radius of inserted munber
		


<form name="" method="post" action="">
<input type="number" name="number" value="" id=""  max="1000" placeholder="radius" />
<input type="submit" name="submit" value="submit" />
</form>
		

</body>
</html>


<?php



	if (isset($_POST['submit'])) {
			$radius = $_POST['number'];
	$area = pi() * pow($radius, 2);
	echo $area;
	echo "<br>";
	$area = round($area, 2, PHP_ROUND_HALF_UP);
	echo $area;
	echo "<br>";
	echo "The area of a circle with radius of $radius is $area to 2 d.p.";
	}

?>