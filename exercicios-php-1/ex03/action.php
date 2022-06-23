<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercícios PHP - Lista 01</title>
	</head>

	<body>
		<header>
			<h1>Exercícios PHP - Lista 01</h1>
			<h2>Exercicio 3</h2>
		</header>

		<?php

            $nota_1 = $_POST["nota_1"];
            $nota_2 = $_POST["nota_2"];
            $nota_3 = $_POST["nota_3"];
            $nota_4 = $_POST["nota_4"];

            $soma = $nota_1 + $nota_2 + $nota_3 + $nota_4;
            $media = $soma / 4;

            if ($media >= 7.0) {
                echo "<h4>Situação: Aprovado</h4>";
            } else {
                echo "<h4>Situação: Reprovado</h4>";
            }
            echo "<p>Média: <strong>" . $media . "</strong> </p>";
            echo "<p>1° Nota:  <strong>" . $nota_1 . "</strong> </p>";
            echo "<p>2° Nota:  <strong>" . $nota_2 . "</strong> </p>";
            echo "<p>3° Nota:  <strong>" . $nota_3 . "</strong> </p>";
            echo "<p>4° Nota:  <strong>" . $nota_4 . "</strong> </p>";

		?>
	</body>
</html>