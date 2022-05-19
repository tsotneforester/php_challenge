
<form action="" method="POST">
Enter a word: <input type="text" name="word" /><br />
How long should the chunks be?
<input type="text" name="number" /><br />
<input type="submit" name="submit" value="Chunkify!">
</form>



<?php
	
	if (isset($_POST['submit'])) {
		$word = $_POST['word'];
$number = $_POST['number'];
$chunks = ceil(strlen($word) / $number);
echo "The {$number}-letter chunks of '{$word}' are:<br />";
for ($i = 0; $i < $chunks; $i++) {
$chunk = substr($word, $i * $number, $number);
printf("%d: %s<br />", $i + 1, $chunk);
}
	}

?>