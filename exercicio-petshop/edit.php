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
$id_pet = 0;
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_pet = $_GET['id'];  
} 

// atualizar dados
if (isset($_POST['nome']) && !empty($_POST['nome'])) { 
    $fName = $_POST['nome'];
    $fEspecie = $_POST['especie'];
    $fRaca = $_POST['raca'];

    $sql = $conn->query("UPDATE pet SET nome = '$fName', especie = '$fEspecie', raca = '$fRaca' WHERE id = '$id_pet'");
    header("Location: consulta.php");
}

$sql = "SELECT * FROM pet WHERE id = '$id_pet'";
$sql = $conn->query($sql);

if ($conn->affected_rows > 0) {
    $row = $sql->fetch_assoc();
} else {
    header("Location: consulta.html");
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
<form method="post">
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

    <tr>
        <td>
            <input 
                type="text" 
                name="nome" 
                id="nome" 
                value="<?php echo $row['nome']; ?>" 
                style="width: 100%;padding: 0.66rem 0;border:2px solid #85502B;border-radius: 6px;text-indent: 14px;"
            />
        </td>
        <td>
            <input 
                type="text" 
                name="especie" 
                id="especie" 
                value="<?php echo $row['especie']; ?>" 
                style="width: 100%;padding: 0.66rem 0;border:2px solid #85502B;border-radius: 6px;text-indent: 14px;"
            />
        </td>
        <td>
            <input 
                type="text" 
                name="raca" 
                id="raca" 
                value="<?php echo $row['raca']; ?>" 
                style="width: 100%;padding: 0.66rem 0;border:2px solid #85502B;border-radius: 6px;text-indent: 14px;"
            />
        </td>
    </tr>

    <tr>
        <td colspan="3" align="center">
            <button type="submit" style="background: #fff;width: 35%;padding: 0.36rem;border-radius: 12px;cursor: pointer;border: 3px solid #ff4956;">
                <strong>Atualizar!</strong>
            </button>
        </td>
    </tr>
    
</table>
</form>
</center>
