<?php 
$conn = new mysqli("127.0.0.1", "root", "", "dbaula");

if ($conn->connect_error) {
    echo "Erro". $conn->connect_error;
} else {
    echo "Banco de Dados conectado!<br><br>";
}

# inserir pessoa
$stmt = $conn->prepare("INSERT INTO tbpessoa(nome, tel, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $tel, $email);

$nome = "Macarena";
$tel = "4002-8922";
$email = "macarenaArui@gmail.com.br"; 

/*
fnome = $_POST['fnome'];
ftel = $_POST['ftel'];
femail = $_POST['femail'];
*/

$stmt->execute();

# exibir dados
$stml = $conn->query("SELECT * FROM tbpessoa ORDER BY nome");
while ($row = $stml->fetch_assoc()) {
	echo json_encode($row)."<br>";
}


?>