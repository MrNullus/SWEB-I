<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercícios PHP - Lista 01</title>
	</head>

	<body>
		<header>
			<h1>Exercícios PHP - Lista 01</h1>
			<h2>Exercicio 4</h2>
		</header>

		<?php

            $sexo = strtolower($_POST["sexo"]);
            $altura = $_POST["altura"];

            if ($sexo == "mulher") {
                $peso_ideial = (72.7 * $altura) - 58;
            } elseif ($sexo == "homem") {
                $peso_ideial = (62.1 * $altura) - 44.7;
            } else {
                echo "<p>Erro: Sexo invalido</p>";
            }

            $peso_final = round($peso_ideial, 2);
            echo "<p>Seu peso ideial é de <strong>" . $peso_final . "Kg</strong> </p>";

		?>
	</body>
</html>