<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
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
	
<div class="container" style=" width: 500px; margin-top: 40px">

<h4> Cadastro de Usuário</h4>
<form action="_insert_usuario.php" method="post">
    <div class= "form-group">
    <label>Nome do usuário </label>
    <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">    
    </div>
    <div class= "form-group">
    <label>Email </label>
    <input type="email" name="mailusuario" class="form-control" required autocomplete="off" placeholder="Digite seu email">    
    </div>
    <div class= "form-group">
    <label>Senha do Usuário </label>
    <input id="txtSenha" type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Digite a senha">    
    </div>
    <div class= "form-group">
    <label>Repetir senha </label>
    <input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Repetir senha"
    oninput="validaSenha(this)">    
    </div>
    <div class="form-group">
        <label> Nível de Acesso </label>
        <select name="nivelusuario" class="form-control">
            <option value="1">Administrador</option>
            <option value="2">Funcionário</option>
            <option value="3">Conferente</option>
        </select>
    </div>
    <div style="text-align: right">
    <button type="submit" class="btn btn-sm btn-success"> Cadastrar</button>
    <a href="menu.php" role="button" class= "btn btn-sm btn-primary"> Voltar </a>
    </div>
   
</div>
</form>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>
 
</body>
</html>