<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Exercicios - PHP</title>
    </head>
    <body>
            <h3>--- Novo Sálario ---</h3>
            <p>
                <?php
                    $initialSalary = $_POST['salaryInput'];

                    if ($initialSalary <= 1200) {
                        $newSalary = $initialSalary + $initialSalary * 0.5;
                    } else {
                        $newSalary = $initialSalary + ($initialSalary * 0.3);
                    }

                    echo "Seu novo sálario é de R$ " . $newSalary;
                ?>
            </p>

            <a href="index.html">voltar</a>
            
        </div>

    </body>
</html>