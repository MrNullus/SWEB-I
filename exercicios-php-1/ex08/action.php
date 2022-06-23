<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercícios PHP - Lista 01</title>
	</head>

	<body>
		<header>
			<h1>Exercícios PHP - Lista 01</h1>
			<h2>Exercicio 8</h2>
		</header>

		<?php

			$numero = $_POST["numero"];

			if ($numero % 10 == 0) {
				echo "O número é divisivel por <b>10</b>";
			} elseif ($numero % 5 == 0) {
				echo "O número é divisivel por <b>5<b>";
			} elseif ($numero % 2 == 0) {
				echo "O número é divisivel por <b>2</b>";
			} else {
				echo "Não foi possivel saber por qual número é divisivel <b>:(</b>";
			}

		?>
	</body>
</html>