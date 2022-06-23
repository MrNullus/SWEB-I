<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Exercicios Sistemas Web I</title>

        <link rel="stylesheet" href="../globals.css">
    </head>
    <body>
        <header>
            <h1>Exercicio - 1.1</h1>
        </header>

        <main>
            <h2>Resultado</h2>

            <?php
                $valor = $_POST["fnum"];

                if ($valor == 0) {
                    echo "<p>  <span>&gt;&gt;</span> O Valor <strong>" . $valor . "</strong> é Igual a Zero";
                } elseif ($valor > 0) {
                    echo "<p> <span>&gt;&gt;</span> O Valor <strong>" . $valor . "</strong> é Positivo";
                } else {
                    echo "<p> <span>&gt;&gt;</span> O Valor <strong>" . $valor . "</strong> é Negativo";
                }

                // var_dump($_POST['fnum']);
            ?>
        </main>

    </body>
</html>
