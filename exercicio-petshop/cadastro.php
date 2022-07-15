<?php
// inicializar mensagens
$SUCCESS = "";
$ERROR = "";

// conectar com o banco de dados
$conn = new mysqli("127.0.0.1", "root", "", "projeto_petshop");

if ($conn->connect_error) {
    $ERROR = "<span style='color: red;''>Erro ".$conn->connect_error."</span>";
    echo $ERROR;
}

if (isset($_POST['nome_pet']) && !empty($_POST['nome_pet'])) {
    // capturar dados
    $nome = $_POST['nome_pet'];
    $especie = $_POST['especie_pet'];
    $raca = $_POST['raca_pet']; 

    // cadastrar pet
    $query = $conn->prepare("INSERT INTO pet (nome, especie, raca) VALUES (?, ?, ?)");
    $query->bind_param("sss", $nome, $especie, $raca);
    $query->execute();

    $SUCCESS = "<span style='color: green;''>Pet cadastrado com sucesso!</span>";
    
} else {
    // setar erro 
    $ERROR = "<span style='color: red;''>*Insira todos os dados</span>";
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

<form method="post">
    <label for="nome_pet">Nome:</label>
    <br>
    <input type="text" name="nome_pet" id="nome_pet" />        
    <br><br>

    <label for="especie_pet">Espécie:</label>
    <br>
    <input type="text" name="especie_pet" id="especie_pet" />
    <br><br>

    <label for="raca_pet">Raça:</label>
    <br>
    <input type="text" name="raca_pet" id="raca_pet" />
    <br><br>    
    <br>

    <button type="submit">Cadastrar!</button>
</form>
<br>

<?php  
if (empty($ERROR)) {
    echo $SUCCESS;  
    echo "<br><br>";
    echo "<img src='./public/image/dancinganime-anime.gif' alt='Dancing Game Anime' width='160px'/>";
} else {
    echo $ERROR;
}
?>

</center>