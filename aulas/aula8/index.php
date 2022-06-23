<?php
include 'conn.php';

if ($conn->connect_error) {
    echo "Erro". $conn->connect_error;
} else {
    echo "Banco de Dados conectado!<br>";
}

$consulta = $conn->query("SELECT * FROM tbpessoa ORDER BY nome");

// retorna true ou false | lê o comando $sql  e passa um registro por vez para o array $row
// o comando var_dump lê o $row escreve na tela o registro que está armazenado
while ($row = $consulta->fetch_array()) {
    var_dump($row);
}

// MYSQLI_ASSOC - associa as informções do array e devolve os dados sem redundancia de informação
while ($row = $consulta->fetch_array(MYSQLI_ASSOC)) {
    var_dump($row);
}

echo "<br>--------------------------------<br>";

// Função: fetch_assoc() - faz a mesma coisa que o comando MYSQLI_ASSOC: 
// associa as informações do array e devolve os dados sem redundancia de informação
while ($row = $consulta->fetch_assoc()) {
    var_dump($row);
}

echo "<br>--------------------------------<br>";

while ($row = $consulta->fetch_assoc()) {
    print_r($row);  
}

echo "<br>--------------------------------<br>";

while ($row = $consulta->fetch_assoc()) {
    echo json_encode($row)."<br>";
}

?>