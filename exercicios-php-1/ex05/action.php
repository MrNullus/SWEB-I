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

            $valor = $_POST["valor"];

			for($i = 0; $i <= $valor+1; $i++) {
				if ($i <= $valor) {
					echo "$i <strong>-</strong> ";
				} else {
					echo " <strong>Fim</strong>";
				}
			}

		?>
	</body>
</html>