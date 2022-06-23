<?php
// # mysqli($host, $bduser, $bdpass, $dbname) faz conecção com o DB
$conn = new mysqli("127.0.0.1", "root", "", "dbaula");

// # se deu erro na conexão o comando $conn->connect_error 
// retorna o erro e armazena na variavel $conn
if ($conn->connect_error) {
    echo "Erro". $conn->connect_error;
} else {
    echo "Banco de Dados CONECTADO!";
}
// # $conn->prepare($sql) prepara um comando que vc quer enviar para o BD, 
// as interrogações são as informações que vai ser passada para o BD
$stnt = $conn->prepare("INSERT INTO tbpessoa(nome, tel, email) VALUES (?, ?, ?)");

// # $stnt->bind_param("params", $var) cria uma refencia na RAM do PC (endereço virtual) para 
// referenciar os valores da varriavel e transfere para o BD, faz uma brindagem/ encapsulamento nos dados
$stnt->bind_param("sss", $nome, $tel, $email);
// "s" - string | "i" - int | "d" - double | "b" - blob, etc...

$nome = "Sei La";
$tel =  "4002-8922";
$email = "seila@gmail.com";


// # executa os comandos SQL
$stnt->execute();

?>