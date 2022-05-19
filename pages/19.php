
<h1>remove dublicates from number (without preg)</h1>
<form name="" method="post" action="">
<input type="text" name="string" value="" placeholder="Enter Number"/>
<input type="submit" name="submit" value="Submit" />
</form>

<?php
	
	if (isset($_POST['submit'])) {
		

	
		function remove_duplicates_list($letters) {

	$array = str_split($letters, 1);
  $nums_unique = array_values(array_unique($array));
		$result = implode(", ", $nums_unique);
  return $result;
}
$string = $_POST['string'];
print_r(remove_duplicates_list($string));

		
			}
?>