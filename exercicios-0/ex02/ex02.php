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
            <h1>Exercicio - 2</h1>
        </header>

        <main>
            <h2>Console</h2>

            <?php
                //** inputs
                $input_a = $_POST["input_a"];
                $input_b = $_POST["input_b"];
                $input_c = $_POST["input_c"];
                $input_d = $_POST["input_d"];
                // echo $input_a; 

                //** A + C
                
                $soma = $input_a + $input_c;
                //** B * D
                $multi = $input_b * $input_d;
                $resultado;

                if ($soma > $multi) {
                    //** se soma > multiplicacao:
                    //** A+c > B*D
                    $resultado = "<p><span>&gt;&gt;</span> <strong>A + C</strong> é maior que <strong>B * D</strong></p>";
                } elseif ($soma < $multi) {
                    //** se soma < multiplicacao:
                    //** A+c < B*D
                    $resultado = "<p><span>&gt;&gt;</span> <strong>A + C</strong> é menor que <strong>B * D</strong></p>";
                } else {
                    //** se soma == multiplicacao:
                    //** A+c == B*D
                    $resultado = "<p><span>&gt;&gt;</span> <strong>A + C</strong> é igual à <strong>B * D</strong></p>";
                }
            ?>

            <div class="results">
                <?php
                    echo $resultado;
                ?>
            </div>

            <div>
                <a href="./index.html" class="btn btn-prev">Voltar</a>
            </div>
            
        </main>

    </body>
</html>
