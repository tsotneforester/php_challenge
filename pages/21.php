
<h1>First Letter Gets Red Color</h1>
<form name="" method="post" action="">
<input type="text" name="string" value="" placeholder="Enter Sentense"/>
<input type="submit" name="submit" value="Submit" />
</form>

<?php
	
	if (isset($_POST['submit'])) {
		

	//Hello My dear Friend, what a great pleasure at 8 o\'clock'
$text = $_POST['string'];
$arry = explode(" ", $text);
foreach ($arry as $done) {
	if (strlen($done)> 1) {
	echo "<span style='color:red;'>" . 
	   substr($done, -strlen($done),1) . "</span>" .
				substr($done, -(strlen($done)-1)) . " ";
	}
	 	elseif (strlen($done)== 1) {
	echo "<span style='color:red;'>" . 
	   substr($done, -strlen($done)) . "</span> ";
	}
}
	}
?>