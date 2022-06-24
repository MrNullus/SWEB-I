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
$query = $conn->query("SELECT nome, especie, raca FROM pet ORDER BY nome");
?>

<center>
<div>
    <h1>PetShop da Belinha</h1>

    <h2>Cadastrar Pet🐶</h2>

    [<a href="consulta.php">consultar🔍</a>]
    [<a href="cadastro.php">Cadastrar✅</a>]
</div>
<br>

<div style="padding:18px">

	<!-- verificando se existe dados -->
	<?php if ($conn->affected_rows > 0) { ?>
	<table width="100%" border="0" cellspacing="12px" cellpadding="16px">

		<tr bgcolor="#DFDFDF" style="color: #090503; font-family: 'Poppins', cursive; font-size: 1.2rem">
			<th>Nome</th>
			<th>Espécie</th>
			<th>Raça</th>
			<!-- <th colspan="2">Actions</th> -->
		</tr>

		<!-- exibindo os dados -->
		<?php while ($row = $query->fetch_assoc()): ?>
		<tr bgcolor='#f1f1f1'>
			<td><?php echo $row['nome']; ?></td>
			<td><?php echo $row['especie']; ?></td>
			<td><?php echo $row['raca']; ?></td>
			<!-- <th style='cursor:pointer;'>✏️</th> -->
			<!-- echo "<th style='cursor:pointer;'>🗑️</th> -->
		</tr>
		<?php endwhile ?>
		
	</table>
	<?php } else { 
		// setando aviso
		$WARNNING = "<span style='color: #A37E5A;font-size:1.2rem''>Não há pets cadastrados... 🐈</span>";
		echo $WARNNING;	
		echo "<br><br>";
		echo "<img src='anime-cat.gif' alt='Cat Gif' />";
	} ?>
	
</div>

</center>

