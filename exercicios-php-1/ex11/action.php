<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercícios PHP - Lista 01</title>
	</head>

	<body>
		<header>
			<h1>Exercícios PHP - Lista 01</h1>
			<h2>Exercicio 11</h2>
		</header>

		<?php

			$valor = $_POST["valor"];

			$antecessor = $valor - 1;
			$sucessor = $valor + 1;

			echo "<p><b>Antecessor</b>: $antecessor</p>";
			echo "<p><b>Valor Digitado</b>: $valor</p>";
			echo "<p><b>Sucessor</b>: $sucessor</p>";

		?>
	</body>
</html>