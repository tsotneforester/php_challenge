
<h1>Get tomorrow, last month and next year</h1>
<form name="" method="post" action="">
<input type="date" name="date" value="" placeholder="Enter Number"/>
<input type="submit" name="submit" value="Submit" />
</form>
</body>
</html>
<?php
	
	if (isset($_POST['submit'])) {
		

	
	
		$date = strtotime($_POST['date']);
		
		$tomorrow = mktime(0, 0, 0, date("m",$date) , date("d",$date)+1, date("Y",$date));
		$lastmonth = mktime(0, 0, 0, date("m",$date)-1, date("d",$date), date("Y",$date));
		$nextyear = mktime(0, 0, 0, date("m",$date), date("d",$date), date("Y",$date)+1);
		
		
		echo "Tomorrow is - " . date("m.d.y",$tomorrow) . "<br>"; 
		echo "Today Last Month Was - " .date("m.d.y",$lastmonth) . "<br>";
		echo "Next year is - " .date("m.d.y",$nextyear) . "<br>";
		
			}
?>