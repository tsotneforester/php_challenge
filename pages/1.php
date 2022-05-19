
	<h1>Please Enter User Name</h1>
	<form name="" method="post" action="">
	<input type="text" name="name" value="" id="" maxlength="30" />
	<input type="submit" name="submit" value="Sumbit Name" />
	</form>
 <h2>Hello, <?php 
	if (isset($_POST['submit'])) {
	$Name = $_POST['name'];
	echo 	$Name;
	}
	?> </h2>

