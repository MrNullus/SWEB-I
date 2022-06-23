<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Exercicios - PHP</title>
    </head>
    <body>
        <div>
            <h1>Exercicio 3</h1>

            <p>
                Resultado: 
                <?php
                    $number = $_POST['number'];

                    if ($number >= 1 and $number <= 12) {
                        echo "<strong>Mês valído</strong>";
                    } else {
                        echo "<strong>Mês Invalído</strong>";
                    }
                ?>
            </p>
            
        </div>

    </body>
</html>