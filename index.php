<?php
session_start();
if (!isset($_SESSION['user_name']) && $_SERVER['REMOTE_ADDR'] !== "94.240.254.188")  {
	session_unset();
	session_destroy();
  header("Location: ../../index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="root/jquery.min.js"></script>
	<script src="root/bootstrap.min.js"></script>
	<link rel="stylesheet" href="root/bootstrap.min.css">
	<script src="root/javascript/index.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">


</head>
<div class="grid">
  <div class="itemhead">
   <h2>Challenges For PHP</h2>
  </div>
	<div class="item1">


			<a href="index.php?PageName=1"> Hello, Tsotne! </li></a>
			<a href="index.php?PageName=2"> Amstrong Num </li></a>
			<a href="index.php?PageName=3"> Text > Digit </li></a>
			<a href="index.php?PageName=4"> String in String </li></a>
			<a href="index.php?PageName=5"> Prime Numb. </li></a>
			<a href="index.php?PageName=6"> Chess </li></a>
			<a href="index.php?PageName=7"> Palindrome </li></a>
			<a href="index.php?PageName=8"> Cookie </li></a>
			<a href="index.php?PageName=9"> Count Length </li></a>
			<a href="index.php?PageName=10"> Number List </li></a>
			<a href="index.php?PageName=11"> FizzBuzz </li></a>
			<a href="index.php?PageName=12"> Odds and Evens Count </li></a>
			<a href="index.php?PageName=13"> Circle </li></a>
			<a href="index.php?PageName=14"> Days Left </li></a>
			<a href="index.php?PageName=15"> C > F </li></a>
			<a href="index.php?PageName=16"> Visit Count</li></a>
			<a href="index.php?PageName=17"> Get 2 Cards</li></a>
			<a href="index.php?PageName=18"> Tom, Next, Last Date</li></a>
			<a href="index.php?PageName=19"> Remove dublicates</li></a>
			<a href="index.php?PageName=20"> Split Link</li></a>
			<a href="index.php?PageName=21"> First Letter color</li></a>
			<a href="index.php?PageName=22"> Redirect</li></a>
			<a href="index.php?PageName=23"> Swap Variables</li></a>
			<a href="index.php?PageName=24"> Cities</li></a>
			<a href="index.php?PageName=25"> F***</li></a>
			<a href="index.php?PageName=26"> Temp Statistic</li></a>
			<a href="index.php?PageName=27"> Multiplication Table</li></a>
	</div>
	<div class="item2">
		<!-- content -->
    <?
     if (!empty($_GET['PageName'])) {
       $PageName = $_GET['PageName'];
			 $Folder = scandir("pages", 1);
			//	print_r($Folder);
			 //unset($Folder[3],$Folder[4]);
			 if (in_array($PageName . ".php", $Folder)) {
					include("pages" . "/" . $PageName . ".php");
			 }
           else {
           	echo "Yo are Lost...";
           }


     }  else {
     	include("pages/1.php");
     }

		?>



		<!-- content end -->
	</div>
  <div class="itemfooter">
    <h2>FOOTER</h2>
  </div>
</div>

</body>

</html>
