<?php
// inicializar mensagens
$ERROR = "";

// conectar com o banco de dados
$conn = new mysqli("127.0.0.1", "root", "", "projeto_petshop");

if ($conn->connect_error) {
	$ERROR = "<span style='color: red;'>Erro ".$conn->connect_error."</span>";
    echo $ERROR;
}

// verificar se o param 'id' existe e se não está passado vazio
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_user = $_GET['id'];  
    $WARNNING = "<span style='color: red;'>Pet deletado!</span>";

    $query = $conn->prepare("DELETE FROM `pet` WHERE id = ?");
    $query->bind_param("s", $id_user);

    $query->execute();
} else {
    $WARNNING = "<span style='color: green'>Pet não deletado!</span>";
}
?>

<center>
<div>
    <h1>PetShop da Belinha</h1>

    <h2>Cadastrar Pet🐶</h2>

    [<a href="index.html">Home🏠</a>]
    [<a href="consulta.php">Consultar🔍</a>]
    [<a href="cadastro.php">Cadastrar✅</a>]
</div>
<br>
<br>

<?php 
echo $WARNNING;
?>
</center>