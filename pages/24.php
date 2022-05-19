
<h1>City List</h1>
<form name="" method="post" action="">
<input type="text" name="string2" value="" placeholder="towns "/>

<input type="submit" name="submit" value="Add and Sort" target= />
(use comma and single space (", ") as seperator)
</form>

<?php
	$string1 = "London, Paris, Amsterdam, New York, Berlin, Brisbane";
	$cities = explode(", ", $string1);
	sort($cities);
	echo "<ol>";
	foreach($cities as $city){
		echo "<li>$city</li>";
	}
	
	if (isset($_POST['submit'])) {
 $string2 = ucwords($_POST['string2']);
 $explodedNames = explode(", ", $string2);


	echo "</ol>";
	$result = array_merge($cities, $explodedNames);
	sort($result);
	echo "<ol>";
	foreach ($result as $city2) {
	echo "<li>" . $city2 . "</li>";
	}
	echo "</ol>";

	}
	
?>