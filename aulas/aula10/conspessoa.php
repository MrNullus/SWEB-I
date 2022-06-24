<?php
$conn = new mysqli("127.0.0.1", "root", "", "dbaula");

if ($conn->connect_error) {
    echo "Erro: " . $conn->connect_error;
} else {
    echo "Banco de dados CONECTADO!<br>";
} 

//função query() passa uma query(comando) para o bd por meio da conexão 
// $conn. Como foipassado um select, há uma resposta que é armazenada no array 
// $consulta$consulta =$conn->query("SELECT*FROM tbpessoa ORDER BY nome");
// laço while é executado enquanto a função fetch_array() retorna "true". 
// A funçãofetch_array() lê o array $consulta e passa um registro por vez para o 
// array $row. ocomando var_dump lê o $row e escreve na tela o registro que está armazenado.
/*
while ($row = $consulta->fetch_array()) {
    var_dump($row);
}
*/
// comando MYSQLI_ASSOC associa as informações do array e devolve os dados semredundância de informação
/*
while ($row = $consulta->fetch_array(MYSQLI_ASSOC)){
    var_dump($row);
}
*/
// Função fetch_assoc() faz a mesma coisa que o comando MYSQLI_ASSOC: associa asinsformações do array e devolve os dados sem redundância de informação
/*
while ($row = $consulta->fetch_assoc()) {
    var_dump($row);
}
*/
// imprimindo com a função print_r(), especial para arrays.
/* 
while ($row = $consulta->fetch_assoc()) {
    print_r($row);
}
*/while($row = $consulta->fetch_assoc()) {
    echo json_encode($row)."<br>";
}

?>