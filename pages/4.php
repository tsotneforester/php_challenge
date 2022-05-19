
	<h2>Test if a given string occurs at the end of another given word.</h2>
	<form name="" method="post" action="">
	<input type="text" name="word1" value="" id="" maxlength="30" placeholder="Word "/>
	<input type="text" name="word2" value="" id="" maxlength="30" placeholder="String"/>
	<input type="submit" value="check" name="submit" />
	</form>


<?php

	if (isset($_POST['submit'])) {
function checkbottom($word1,$word2) {
 $len1 = strlen($word1);
 $len2 = strlen($word2);
	if ($len2 >$len1) {
		echo "second part can not be larger!";
	}
	 else {
				$result1 = substr($word1, -$len2);
	   if ($result1 == $word2) {
		  echo "True";
	}
			else {echo "False";}
			}
}
checkbottom($_POST['word1'], $_POST['word2']);
	}

?>