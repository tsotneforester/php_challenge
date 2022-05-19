
<h1>Link Split</h1>
<form name="" method="post" action="">
<input type="text" name="string" value="" placeholder="Enter Link"/>
<input type="submit" name="submit" value="Submit" />
</form>

<?php
	
	if (isset($_POST['submit'])) {
		

$url = $_POST['string'];
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."<br>";
echo 'Host : '.$url['host']."<br>";
echo 'Path : '.$url['path']."<br>";

		
			}
?>