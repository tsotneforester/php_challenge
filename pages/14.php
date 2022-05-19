


		calculate days to date
		


<form name="" method="post" action="">
<input type="date" name="date" value="" id=""   placeholder="future date" />
<input type="submit" name="submit" value="submit" />
</form>
		

</body>
</html>


<?php



	if (isset($_POST['submit'])) {
	date_default_timezone_set('Asia/Tbilisi');
	$christmasDay = strtotime($_POST['date']);


		$currentTime = time();
	$seconds = $christmasDay - $currentTime;
	$minutes = $seconds / 60;
	$hours = $minutes / 60;
	$days = ceil($hours / 24);
	echo "There are $days days until " . date("d.m.y",$christmasDay);

	}

?>