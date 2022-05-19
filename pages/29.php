
<form action="" method="post">
Select your personality attributes:<br />
<select name="attributes[]" multiple>
<option value="perky">Perky</option>
<option value="morose">Morose</option>
<option value="thinking">Thinking</option>
<option value="feeling">Feeling</option>
<option value="thrifty">Spend-thrift</option>
<option value="shopper">Shopper</option>
</select><br />
<input type="submit" name="s" value="Record my personality!" />
</form>
<?php
	if (isset($_POST['s'])) {
		//echo "heddllo";
$description = join(' ', $_POST['attributes']);
echo "You have a {$description} personality.";
	}





?>
