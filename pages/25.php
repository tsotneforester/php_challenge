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
	I love this website but feel that some asshole writes fucking comments are detracting from the user experience.  I call such people freak"
<form name="" method="post" action="">
<input type="text" name="string" value="" id=""  max="1000" placeholder="" />
<input type="submit" name="submit" value="submit" />
</form>
</body>
</html>

<?php
	
	if (isset($_POST['submit'])) {
	$badWords = ["asshole", "freak", "fucking" ];
			$string = $_POST['string'];
	foreach($badWords as $badWord){
		$string = str_replace($badWord, substr($badWord,-strlen($badWord), 1) . str_repeat("*",strlen($badWord)-1), $string);
	}
	echo $string;

	}


?>
