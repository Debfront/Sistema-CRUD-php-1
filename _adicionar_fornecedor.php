<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	   <style>
		#botao{
			background-color: #ff1168;
			color: #ffffff;
		}
			body{
				background-image: url("img2/Back2.jpg");
				background-position: center right;
				background-attachment: fixed;
				background-size: 1400px 1000px;
				color: rgba(0,0,0,1);
			}
	  </style>
	</head>
	<body>
	
		<div align="right">
		<div class="card" style="background-color: #000090;">
		  <div class="card-body">
			<h5 class="card-title" style="color:#FFFFFF;"><?php echo "Olá, ".$_COOKIE['name']."!"; ?>
			<a href="_deslogar_usuario.php" class="btn btn-sm btn-success"> Sair</a>
			</h5>
		  </div>
		</div>
	</div>
	
		<div class="container" style="margin-top: 40px; width:500px ">
			<h4>Cadastro de fornecedor</h4>
			<form action="_inserir_fornecedor.php" method= "post">
				<label>Fornecedor</label>
				<div>
					<input type="text" name= "fornecedor" class="form-control" placeholder="Digite o nome do fornecedor"
					autocomplete="off">
				</div>
					<div style="text-align: right">
					<button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
					 <a href="index.php" role="button" id="botao"class="btn btn-sm " >Voltar</a>
				</div>
			
			</form>
		</div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
	</body>
</html>