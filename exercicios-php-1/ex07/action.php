<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercícios PHP - Lista 01</title>
	</head>

	<body>
		<header>
			<h1>Exercícios PHP - Lista 01</h1>
			<h2>Exercicio 5</h2>
		</header>

		<?php

            $valor1 = $_POST["valor1"];
			$valor2 = $_POST["valor2"];
			$tot = $valor1 + $valor2;

			for ($i = 0; $i <= $tot; $i++) {
				if ($i > $valor1 and $i < $valor2) {
					echo "| ". $i ." |";
				}
			} 
		?>
	</body>
</html>