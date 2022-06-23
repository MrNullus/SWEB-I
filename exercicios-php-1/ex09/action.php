<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercícios PHP - Lista 01</title>
	</head>

	<body>
		<header>
			<h1>Exercícios PHP - Lista 01</h1>
			<h2>Exercicio 9</h2>
		</header>

		<?php

			$numero1 = $_POST["numero1"];
			$numero2 = $_POST["numero2"];
			$numero3 = $_POST["numero3"];
		
			if ($numero1 > $numero2) {
				if ($numero2 > $numero3) {
					echo "$numero1 $numero2 $numero3";
				} else {
					if ($numero1 > $numero3) {
						echo "$numero1 $numero3 $numero2";
					} else {
						echo "$numero3 $numero1 $numero2";
					}
				}
			} else {
				if ($numero2 > $numero3) {
					if ($numero1 >  $numero3) {
						echo "$numero2 $numero1 $numero3";
					} else {
						echo "$numero2 $numero3 $numero1";
					}
				} else {
					echo "$numero2 $numero1 $numero3";
				}
			}

		?>
	</body>
</html>