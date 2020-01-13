<!DOCTYPE html>
<?php
	include 'funcoes_sqli.php';
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/be249cf2a3.js" crossorigin="anonymous"></script>
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
  <div class="container" style="margin-top:40px">
  <h3>Listas de produtos</h3>
  <br>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nro produtos</th>
      <th scope="col">Nome produtos</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>

    </tr>
  </thead>
  
   
    <?php
    include 'conexao.php';
    $sql = "SELECT * FROM `estoque`";
    $busca = mysqli_query( $conexao, $sql);

    while ( $array = mysqli_fetch_array($busca)){
        $id_estoque = $array['id_estoque'];
        $nroproduto = $array['nroproduto'];
        $nomeproduto = $array['nomeproduto'];
        $categoria = $array['categoria'];
        $quantidade = $array['quantidade'];
        $fornecedor = $array['fornecedor'];
    ?>
    <tr>

     <td> <?php echo $nroproduto  ?></td>
     <td> <?php echo $nomeproduto  ?></td>
     <td> <?php echo $categoria  ?></td>
     <td> <?php echo $quantidade  ?></td>
     <td> <?php echo $fornecedor  ?></td>
     <td> 
	 
     <?php
		if ( ($nivelusuario == 1)  || ( $nivelusuario ==2 )) {

     ?>
      <a class="btn btn-warning btn-sm" style="color:#ffffff"href="editar_produto.php?id=<?php echo $id_estoque ?>" 
      role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
      <?php } 
       if ( $nivelusuario == 1) {
      
      ?>
      <a class="btn btn-danger btn-sm" style="color:#ffffff"href="deletar_produto.php?id=<?php echo $id_estoque ?>" 
      role="button"><i class="far fa-trash-alt"></i></i>&nbsp;Excluir</a>
      <?php } ?>
    </td>
     </tr>
		<?php } ?>
</table>
  <div style="text-align: right">
  <a href="index.php" role="button" class="btn btn-sm btn-primary" >Voltar</a>
  </div>
</div>  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>