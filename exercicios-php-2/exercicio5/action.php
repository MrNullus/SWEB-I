<h2>Resultado</h2>
<?php
	$perimetro = 0;
	$area = 0;

	$base = $_POST["baseInput"];
	$altura = $_POST["alturaInput"];

	$perimetro = ($base * 2) + ($altura * 2);		
	$area = $base * $altura;

	echo "Perimetro: $perimetro";	
	echo "<br /><br />";
	echo "Area: $area";
?>