
This task is based on using arrays and selecting random elements from arrays.
		Your task is to create two arrays, one for the suits and one for the values.
		You then need to select a random element from each array which will then represent a playing card.
		<form name="" method="post" action="">
	<input type="submit" name="submit" value="Get Card" />
</form>

	</h3>
		</body>
		</html>

	<?php

		if (isset($_POST['submit'])) {
				$suits = ["Spades", "Clubs", "Diamonds", "Hearts"];
	$values = ["Ace", 2, 3, 4, 5, 6, 7, 8, 9, 10, "Jack", "Queen", "King"];
	$suit = $suits[array_rand($suits)];
	$value = $values[array_rand($values)];
	$card = $value . " of " . $suit;
	echo $card;
		}





?>