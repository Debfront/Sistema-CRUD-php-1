<?php
include 'conexao.php';
//include 'script2/password.php';

$usuario = $_POST['usuario'];
$senhausuario = $_POST['senha'];

$sql = "SELECT nome_usuario, mail_usuario, senha_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status1= 'Ativo'";
$buscar = mysqli_query($conexao , $sql);

 $total = mysqli_num_rows ($buscar);

 while($array= mysqli_fetch_array($buscar)){
    $senha = $array ['senha_usuario'];
    $senhadecodificada = sha1($senhausuario);
	$nome_usuario = $array['nome_usuario'];
 
 
		if ( $total > 0 ){
			if( $senhadecodificada == $senha){
				
				session_start();
				$_SESSION['usuario'] = $usuario;
				setcookie('name', $nome_usuario, (time() + (3 * 24 * 3600)));
				setcookie('user', $usuario, (time() + (3 * 24 * 3600)));
				
				header('Location: menu.php');
			}else {
				header('Location: erro.php');
		
			}


		} else {
			header('Location: erro.php');

		}
}


?>