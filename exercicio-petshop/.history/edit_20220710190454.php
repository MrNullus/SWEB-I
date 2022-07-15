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
    <form method="POST">
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

    <tr>
        <td>
            <input 
                type="text" 
                name="nome" 
                id="nome" 
                value="<?php echo $row['nome']; ?>" 
                style="width: 100%;padding: 0.56rem;border:2px solid #85502B;border-radius: 6px;"
            />
        </td>
        <td>
            <input 
                type="text" 
                name="nome" 
                id="nome" 
                value="<?php echo $row['especie']; ?>" 
            />
        </td>
        <td>
            <input 
                type="text" 
                name="nome" 
                id="nome" 
                value="<?php echo $row['raca']; ?>" 
            />
        </td>
    </tr>

    <tr>
        <td colspan="3" align="center">
            <button type="submit" style="width: 35%;padding: 0.36rem;border-radius: 12px;cursor: pointer;">
                <strong>Atualizar!</strong>
            </button>
        </td>
    </tr>
    </form>
</table>

</center>
