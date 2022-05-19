
		<form action="" method="post">
        <input type="text" name="string">
        Y<input type="radio" name="spaces" value="Y">
        N<input type="radio" name="spaces" value="N">
        <input type="submit" name="submit" value="COUNT">
		</form>
		<pre>
				This task has been designed to encourage you to use forms and functions.
		You need to design a form that will allow a user to input a string.
		Take the user input and count the number of characters in the string.
		Output the length of the string.
		If the user was to input:
		Have a nice day.
		then the output should be as follows:
		The string is 16 characters long
		EXTENSION
		Add radio button elements to the form that will allow the user to select if they wish to count the spaces in
		the string along with the other characters.
		Process the form taking into account whether or not they wish to count the spaces.
		</pre>
		




<?php
	if(isset($_POST['submit'])){
		$sentence = $_POST['string'];
		$spaces = $_POST['spaces'];
		if($spaces == "Y"){
			$sentenceLength = strlen(str_replace(" ", "", $sentence));
			} else {
			$sentenceLength = strlen($sentence);
		}
		echo "The sentence is $sentenceLength characters long";
	}


?>