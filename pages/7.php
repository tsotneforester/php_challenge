<?php
if(isset($_POST['submit'])){
		$word = $_POST['word'];
		$word = str_replace(' ', '', $word); //this line handles spaces
		$reversedWord = strrev($word);
		if($word == $reversedWord){
			echo $word . " is a palindrome";
			} else {
			echo $word . " is not a palindrome";
		}
	}


?>



		<form action="" method="post">
		<input type="text" name="word" required>
		<input type="submit" name="submit">
		</form>
