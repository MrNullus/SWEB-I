<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercícios PHP - Lista 01</title>
	</head>

	<body>
		<header>
			<h1>Exercícios PHP - Lista 01</h1>
			<h2>Exercicio 6</h2>
		</header>

		<?php

            $valor = $_POST["valor"];
			$fatorial = 1;
			$n = $valor;
			
			while($n > 1) {
				$fatorial *= $n;
				$n--;
			}
			echo "Resultado: <strong>!" .$valor. "</strong> = <strong>" .$fatorial. "</strong>";

		?>
	</body>
</html>