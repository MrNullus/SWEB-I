<h2>Resultado</h2>
<?php
	$word = $_POST["wordInput"];
	$colsCount = $_POST["colsCount"];

	for ($i=1; $i <= $colsCount; $i++) { 

		for ($j=1; $j <= $i; $j++) { 
			echo "$word ";
		}

		echo "<br />";
	}

?>