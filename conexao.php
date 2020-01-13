<?php
//criar uma conexão  em php
$servername = "localhost"; //padrão- server local
$database = "curso_crud"; // alterar de acordo com o nome do seu banco de dados
$username = "root"; //padrão.
$password = ""; //senha do banco de dados.

$conexao = mysqli_connect($servername, $username, $password, $database);
?>