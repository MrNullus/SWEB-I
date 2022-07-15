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

// verificar se o param 'id' existe e se não está passado vazio
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_user = $_GET['id'];  
    $WARNNING = "<span style='color: red;'>Pet atualizado!</span>";

    $query = $conn->query("SELECT nome, especie, raca FROM `pet` WHERE id = {$id_user}");
    $row = $query->fetch_assoc();
} else {
    $WARNNING = "<span style='color: green'>Pet não atualizado!</span>";
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

<!-- exibindo os dados -->
<table width="60%" border="0" cellspacing="12px" cellpadding="16px">
    <tr bgcolor="#DFDFDF" style="color: #090503; font-family: 'Poppins', cursive; font-size: 1.2rem">
        <th>
            <label for="nome">Nome</label>
        </th>
        <th>
            <label for="especie">Espécie</label>
        </th>
        <th>
            <label for="raca">Raça</label>
        </th>
    </tr>

    <tr bgcolor='#f1f1f1'>
        <td>
            <input 
                type="text" 
                name="nome" 
                id="nome" 
                value="<?php echo $row['nome']; ?>" 
            />
        </td>
        <td>
            <?php echo $row['especie']; ?>
        </td>
        <td>
            <?php echo $row['raca']; ?>
        </td>
    </tr>
</table>

</center>
