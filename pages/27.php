
ფორმა, სადაც შეიყვან 1დან 9ის ჩათვლით რიცხვს, ასევე მაქსიმუმ 10000 მდე რიცხვს, გააკეთე გამრავლების ტაბულა, სა დაც პირველი თანამამრავლი იქნება 1-9 ამდე რიცხვი, ხოლო ნამრავლი მაქსიმუმ 10000 მდე არჩეული ციფრი ფორმიდან, ან მისი უახლოესი 1-9 მდე რიცხვის ჯერადი
		<form name="" method="post" action="">

<input type="number" name="numberx" value="" id=""  max="9" placeholder="0-9" />
<input type="number" name="numbery" value="" id=""  max="10000" placeholder="<10000" />


		


<input type="submit" name="submit" value="submit" />
</form>


<?php
	
	if (isset($_POST['submit'])) {
	$numberx = $_POST['numberx'];
	$numbery = $_POST['numbery'];
	$result = $numberx * $numbery;
	
		for ($i=1; $i<ceil($numbery/$numberx); $i++) {
		 $result = $numberx * $i ;
		
		 echo $numberx . " * " . $i . " = " . $result . "<br>";

		}
	


	}


?>
