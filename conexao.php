<?php

header("Content-Type: text/html; charset=utf-8",true);

$host = "localhost"; //servidor do mysql
$user = "root"; //usuario do banco de dados
$senha = ""; //senha do banco de dados
$db = "Curriculo"; //banco de dados



$conexao = mysqli_connect($host, $user, $senha, $db);

// Erro na conexão? Termina a execução do script.
if (mysqli_connect_error()) {
    exit("Erro ao realizar a conexão com o banco de dados.");
}
else{
    //echo 'sucesso ao conectar ao banco';
}



?>