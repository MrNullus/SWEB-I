<?php
// inicializar mensagens
$ERROR = "";
$WARNINNG = "";

// conectar com o banco de dados
$conn = new mysqli("127.0.0.1", "root", "", "projeto_petshop");

if ($conn->connect_error) {
	$ERROR = "<span style='color: red;''>Erro ".$conn->connect_error."</span>";
    echo $ERROR;
}

// buscando os dados
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

<?php 

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $WARNNING = "<span style='color: green'>Pet atualizado!</span>";
    $id_user = $_GET['id'];

    $query = $conn->prepare("SELECT id, nome, especie, raca FROM pet WHERE id = ?");
    $query->bind_param("s", $id_user);
} else {
    $WARNNING = "<span style='color: red'>Pet não atualizado!</span>";
}

?>
</center>
