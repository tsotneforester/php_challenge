
<h1>Redirect to Link</h1>
<form name="" method="post" action="">
<input type="text" name="string" value="" placeholder="Enter Link"/>
<input type="submit" name="submit" value="Redirect" target="_blank" />
</form>

<?php
	
	if (isset($_POST['submit'])) {
	


		
header('Location: ' . $_POST['string']);


	}
?>