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

			// inputs
			$input_a = $_POST["input_a"];
			$input_b = $_POST["input_b"];
			$input_c = $_POST["input_c"];
			$input_d = $_POST["input_d"];
			// echo $input_a;

			// A + C
			$soma = $input_a + $input_c;
			// B * D
			$multi = $input_b * $input_d;

			if ($soma > $multi) {
				// soma > multiplicacao
				// A+c > B*D
				echo "<p>A + C é maior que B * D</p>";
			} elseif ($soma < $multi) {
				// soma < multiplicacao
				// A+c < B*D
				echo "<p>A + C é menor que B * D</p>";
			} else {
				// soma == multiplicacao
				// A+c == B*D
				echo "<p>A + C é igual que B * D</p>";
			}

		?>
	</body>

</html>