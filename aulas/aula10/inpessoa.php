<?php 
$conn = new mysqli("127.0.0.1", "root", "", "dbaula");

if ($conn->connect_error) {
    echo "Erro". $conn->connect_error;
} else {
    echo "Banco de Dados conectado!<br><br>";
}

$fnome = $_POST['fnome'];
$ftel = $_POST['ftel'];
$femail = $_POST['femail'];

# inserir pessoa
$stmt = $conn->prepare("INSERT INTO tbpessoa(nome, tel, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $fnome, $ftel, $femail);

$stmt->execute();

# exibir dados
$stml = $conn->query("SELECT * FROM tbpessoa ORDER BY nome");
?>

<div style="padding: 12px;">
    <table cellpadding="12px" border="2" width="100%">
        <tr>
            <th># ID</th>
            <th>Nome</th>
            <th>Telefone</th>    
            <th>Email</th>
        </tr>
        <?php
        while ($row = $stml->fetch_assoc()) {
            echo "<tr>";
                echo "<td>". $row['idpessoa'] ."</td>";
                echo "<td>". $row['nome'] ."</td>";
                echo "<td>". $row['tel'] ."</td>";
                echo "<td>". $row['email'] ."</td>";
                echo "<th>X</th>";
            echo "</tr>";
        }
        ?>
    </table>
</div>