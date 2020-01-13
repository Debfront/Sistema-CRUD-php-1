<!DOCTYPE html>
<?php
	include 'funcoes_sqli.php';
	if (!isset($_COOKIE['user'])) {
         header("Location: index.php");
  	}
?>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Menu</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
			body{
				background-image: url("img2/Back2.jpg");
				background-position: center right;
				background-attachment: fixed;
				background-size: 1600px 1400px;
				color: rgba(0,0,0,1);
			}
		</style>

	</head>
	<body>
	<?php

		$usuario = Começar_Sessao_Usuario();
		$nivelusuario = Selecionar_Nivel_Usuario($usuario);
	

	?>

	<div align="right">
		<div class="card" style="background-color: #000090;">
		  <div class="card-body">
			<h5 class="card-title" style="color:#FFFFFF;"><?php echo "Olá, ".$_COOKIE['name']."!"; ?>
			<a href="_deslogar_usuario.php" class="btn btn-sm btn-success"> Sair</a>
			</h5>
		  </div>
		</div>
	</div>
	
	<div class="container" style= "margin-top:100px">

	<div class="row">
	
	
	<?php
	if( ($nivelusuario == 1) || ( $nivelusuario == 2) ) {
	?>

	  <div class="col-sm-6">
		<div class="card">
		  <div class="card-body">
			<h5 class="card-title">Adicionar produto</h5>
			<p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
			<a href="adicionar_produto.php" class="btn btn-primary">Cadastrar produto</a>
		  </div>
		</div>
	  </div>

	<?php } ?>
	  <div class="col-sm-6">
		<div class="card">
		  <div class="card-body">
			<h5 class="card-title">Lista de produtos</h5>
			<p class="card-text">Vizualizar, editar e excluir produtos do estoque.</p>
			<a href="_listar_produtos.php" class="btn btn-primary"> Produtos</a>
		  </div>
		</div>
	  </div>
	  <div class="col-sm-6">
		<div class="card">
		  <div class="card-body">
			<h5 class="card-title">Adicionar categoria </h5>
			<p class="card-text">Opção para adicionar categoria de produtos.</p>
			<a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar categoria</a>
		  </div>
		</div>
	  </div>
	  <div class="col-sm-6">
		<div class="card">
		  <div class="card-body">
			<h5 class="card-title"> Cadastrar fornecedor</h5>
			<p class="card-text">Opção para cadastrar fornecedores</p>
			<a href="_adicionar_fornecedor.php" class="btn btn-primary"> Cadastrar fornecedores</a>
		  </div>
		</div>
	  </div>
	  <div class="col-sm-6">
		<div class="card">
		  <div class="card-body">
			<h5 class="card-title"> Cadastro de usuários</h5>
			<p class="card-text">Cadastrar usuarios</p>
			<a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar</a>
		  </div>
		</div>
	  </div>


	  <div class="col-sm-6">
		<div class="card">
		  <div class="card-body">
			<h5 class="card-title"> Aprovar Usuários</h5>
			<p class="card-text">Aprovar usuários cadastrados</p>
			<a href="aprovar_usuario.php" class="btn btn-primary">Aprovar</a>
		  </div>
		</div>
	  </div>
    </div>
	</div>  

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
</html>