<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercicios Sistemas Web I</title>

        <link rel="stylesheet" href="../globals.css">
    </head>
    <body style="overflow: hidden">
        <header>
            <h1>Exercicio - 1</h1>
        </header>

        <main>
            <h2>Console</h2>

            <div class="results"> 
                <?php
                    $valor = -1020;

                    if ($valor == 0) {
                        echo "<p>  <span>&gt;&gt;</span> O Valor <strong>" . $valor . "</strong> é <strong>Igual a Zero</strong>";
                    } elseif ($valor > 0) {
                        echo "<p> <span>&gt;&gt;</span> O Valor <strong>" . $valor . "</strong> é <strong>Positivo</strong>";
                    } else {
                        echo "<p> <span>&gt;&gt;</span> O Valor <strong>" . $valor . "</strong> é <strong>Negativo</strong>";
                    }
                ?>
            </div>
        </main>

    </body>
</html>
