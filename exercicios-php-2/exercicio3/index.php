<h2>Resultado</h2>
<?php
	$number = $_POST["number"];
	$mult = 1;

	for ($i=1; $i <= $number; $i++) { 
		$mult *= $i;

		echo "$i ";
		if ($i == $number) {
			echo " = $mult";
		}
	}

?>