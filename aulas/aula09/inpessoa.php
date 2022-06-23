<?php 
$conn = new mysqli("127.0.0.1", "root", "", "dbaula");

if ($conn->connect_error) {
    echo "Erro". $conn->connect_error;
} else {
    echo "Banco de Dados conectado!<br><br>";
}

$fnome = $_POST['fnome'];
$ftel = $_POST['ftel'];
$femail = $_POST['femail'];

# inserir pessoa
$stmt = $conn->prepare("INSERT INTO tbpessoa(nome, tel, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $fnome, $ftel, $femail);

$stmt->execute();

# exibir dados
$stml = $conn->query("SELECT * FROM tbpessoa ORDER BY nome");
while ($row = $stml->fetch_assoc()) {
    echo json_encode($row)."<br>";
    echo $row['nome'];
}


?>