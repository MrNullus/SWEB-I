<?php

$conn = new PDO("mysql:dbname=dbaula;host=localhost", "root", "");

$sql = $conn->prepare("UPDATE tbpessoa SET tel = :TEL, email = :EMAIL WHERE idpessoa = :ID");

$sql->bindParam(":ID", $id);
$sql->bindParam(":TEL", $tel);
$sql->bindParam(":EMAIL", $email);

$id = $_POST['fid'];
$tel = $_POST['ftel'];
$email = $_POST['femail'];

$sql->execute();

echo "DADOS ALTERADOS COM SUCESSO!";

?>

<br>
<img src="./img/duck-happy.gif" alt="Alt Gif" />