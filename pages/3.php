
	<h2>Transfer text to Digit</h2>
<form name="" method="post" action="">
	<input type="text" name="text" value="" id="" maxlength="30" />
	<input type="submit" value="submit" name="submit" />
<p><?php if (isset($_POST['submit'])) {
function texto($text) {
	switch ($text) {
		case "zero":
		$result = "0";
		break;
		case "one":
		$result = "1";
		break;
				case "two":
		$result = "2";
		break;
				case "three":
		$result = "3";
		break;
				case "four":
		$result = "4";
		break;
				case "five":
		$result = "5";
		break;
				case "six":
		$result = "6";
		break;
						case "seven":
		$result = "7";
		break;
						case "eight":
		$result = "8";
		break;
						case "nine":
		$result = "9";
		break;
		default:
		$result = "Not Digit";
	}
	return 	$result;
}
echo "Your digit is " . texto($_POST['text']);
		} ?> </p>
</form>
