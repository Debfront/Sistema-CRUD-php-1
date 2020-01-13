<?php
include 'conexao.php';

$id= $_GET['id'];
$nivel = $_GET['nivel'];

if ($nivel == 1){

   $update = " UPDATE usuarios SET status1= 'ATIVO' , nivel_usuario =1 WHERE id_usuario =$id";
   $atualizacao = mysqli_query($conexao, $update);
   echo "Administrador Aprovado";
}
if ($nivel == 2){

    $update = " UPDATE usuarios SET status1= 'ATIVO' , nivel_usuario = 2 WHERE id_usuario =$id";
    $atualizacao = mysqli_query($conexao, $update);
    echo "Funcionário Aprovado";
 }
 if ($nivel == 3){

    $update = " UPDATE usuarios SET status1= 'ATIVO' , nivel_usuario =3  WHERE id_usuario =$id";
    $atualizacao = mysqli_query($conexao, $update);
    echo "Conferente Aprovado";
 }
 header("Location : aprovar_usuario.php");
 
?>