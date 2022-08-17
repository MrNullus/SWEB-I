<?php 

$conn = new PDO("mysql:dbname=dbaula;host=localhost", "root", "");

$sql = $conn->prepare("DELETE FROM tbpessoa WHERE idpessoa = :ID");
$sql->bindParam(":ID", $id);

$id = $_POST['fid'];

$sql->execute();

echo "DADOS DELETADOS COM SUCESSO!";

?>
<br>
<img src="./img/del.gif" alt="Del Gif" />