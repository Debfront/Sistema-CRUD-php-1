<?php
include 'conexao.php';
include 'script2/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['mailusuario'];
$senha = $_POST['senhausuario'];
$nivel = $_POST['nivelusuario'];
$status1= 'Ativo';

$sql = "INSERT INTO usuarios(nome_usuario, mail_usuario, senha_usuario, nivel_usuario, status1) 
values ('$nomeusuario', '$mail', sha1('$senha'), $nivel, '$status1' ) ";

$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 400px">
<center>
<h3>Usuário cadastrado com sucesso</h3>
<div style="margin-top:10px">
<a href="cadastro_usuario.php" class= "btn btn-sm btn-warning" style="color:#fff">Voltar</a>
</div>
</center>
</div>