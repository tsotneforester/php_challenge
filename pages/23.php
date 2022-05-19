<!DOCTYPE>
<head>
	<title>title</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow" />
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<h1>Swap Variables</h1>
<form name="" method="post" action="">
<input type="text" name="string1" value="" placeholder="Variable 1"/>
<input type="text" name="string2" value="" placeholder="variable 2"/>


<input type="submit" name="submit" value="Swap" target="_blank" />
</form>
</body>
</html>
<?php
	
	if (isset($_POST['submit'])) {
		

	
$a = $_POST['string1'];
$b = $_POST['string2'];



		echo "Variable 1 is :  ". $a  . " Variable 2 is :  ". $b . "<br>";
	list($a, $b) = array($b, $a);
	echo "After swapping:"  . "<Br>" ." Variable 1 is :  ". $a  . " Variable 2 is : ". $b;

	}
?>