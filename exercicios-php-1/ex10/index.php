<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercícios PHP - Lista 01</title>
	</head>

	<body>
		<header>
			<h1>Exercícios PHP - Lista 01</h1>
			<h2>Exercicio 10</h2>
		</header>

		<?php

			$idade_juca = 1.10;
			$idade_chico = 1.50;			
			
			$cresc_juca = 0.3;
			$cresc_chico = 0.2;
			$anos_necess = 0;

			while($idade_chico > $idade_juca) {
				$idade_chico += $cresc_chico;
				$idade_juca += $cresc_juca;

				$anos_necess++;
			}

			echo "<h3>Para que Juca seja maior que Chico vão ser necessarios $anos_necess anos.</h3>";
			echo "<p><b>Respectivas alturas em cinco anos:</b></p>";
			echo "<p>Altura de Chico: <b>". $idade_chico ."m</b></p>";
			echo "<p>Altura de Juca: <b>". $idade_juca ."m</b></p>";

		?>
	</body>
</html>