<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Exercicios - PHP</title>
    </head>
    <body>
            <h2>Exercicio 2 - Multiplicação</h2>
            <p>
                <?php
                    $fator1 = $_POST['fator1'];
                    $fator2 = $_POST['fator2'];
                    $produto = 0;

                    echo "( $fator1 * $fator2 ) = ";
                    for ($i = 1; $i <= $fator1; $i++) {    
                        $produto += $fator2;

                        
                        echo $fator2;
                        if ($i != $fator1){
                            echo " + ";
                        }
                        
                    }

                    echo "<br /><br />";
                    echo "( $fator1 * $fator2 ) = $produto";
                ?>
            </p>
            
        </div>

    </body>
</html>