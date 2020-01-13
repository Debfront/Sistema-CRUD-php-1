<!DOCTYPE html>
<?php
	//Se já tiver logado, não precisa logar novamente.
	if (isset($_COOKIE['user'])) {
         header("Location: menu.php");
  	}
?>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title> Tela de Login </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style type="text/css">
		   #tamanho{
			   width: 350px;
			   -webkit-box-shadow: 10px 10px 26px -4px rgba(181,181,181,1);
			   -moz-box-shadow: 10px 10px 26px -4px rgba(181,181,181,1);
				box-shadow: 10px 10px 26px -4px rgba(181,181,181,1);
		    }
		
		</style>
	</head>
	<body>
		<div class="container" id="tamanho" style="margin-top:100px; border-radius: 15px; border: 2px solid #f3f3f3" >
			<div style= "padding:10px">
				<center>
					<img src="img2/cadeado.png" width="125px" height="125px">
				</center>
				<form action="validacao_login.php" method= "post">
				 
					<div class="form-group">
						<label>Usuário</label>
						<input type="text" name= "usuario" class="form-control"  placeholder="Usuário" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>Senha</label>
						<input type="password" name= "senha" class="form-control" placeholder="Senha" autocomplete="off" required>
					</div>
			   
					<div style="text-align: right;">
						<button type="submit" class=" btn btn-sm btn-success">Entrar</button>
					</div>
				</form> 
			</div>
		</div>

	<div style="margin-top:10px">
		<center>
			<small> Você não possui cadastro ? Clique <a href="cadastro_usuario_externo.php">aqui</a></small>
		</center>
	</div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
</html>