
<form action="" method="post">
Select your personality attributes:<br />
<input type="checkbox" name="attributes[]" value="perky" /> Perky<br />
<input type="checkbox" name="attributes[]" value="morose" /> Morose<br />
<input type="checkbox" name="attributes[]" value="thinking" />
Thinking<br />
<input type="checkbox" name="attributes[]" value="feeling" /> Feeling<br
/>
<input type="checkbox" name="attributes[]" value="thrifty" />Spendthrift<br />
<input type="checkbox" name="attributes[]" value="shopper" /> Shopper<br
/>
<br />
<input type="submit" name="s" value="Record my personality!" />
</form>
<?php
	if (isset($_POST['s'])) {
		$description = join (' ', $_POST['attributes']);
echo "You have a {$description} personality.";
	}



?>
