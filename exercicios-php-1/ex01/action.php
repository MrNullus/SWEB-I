<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercícios PHP - Lista 01</title>
</head>
	<body>
		<header>
			<h1>Exercícios PHP - Lista 01</h1>
			<h2>Exercicio 2</h2>
		</header>

		<?php
			
			$valor = $_POST["valor"];
			// echo $valor;

			if ($valor == 0) {
				echo "<h4>O valor " . $valor . " é <strong>Igual a Zero</strong></h4>";
			} elseif ($valor > 0) {
				echo "<h4>O valor " . $valor . " é <strong>Positivo</strong></h4>";
			} else {
				echo "<h4>O valor " . $valor . " é <strong>Negativo</strong></h4>";
			}

		?>
	</body>
</html>