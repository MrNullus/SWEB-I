<?php
$conn = new mysqli("127.0.0.1", "root", "", "petshop");

if ($conn->connect_error) {
    echo "Erro". $conn->connect_error;
} else {
    echo "Banco de Dados conectado!<br><br>";
}

$nome = $_POST['nome_pet'];
$especie = $_POST['especie_pet'];
$raca = $_POST['raca_pet']; 

$sql = $conn->prepare()

?>