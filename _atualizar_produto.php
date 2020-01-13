<?php
	include 'funcoes_sqli.php';
	$nomeproduto = Atualizar_Produto();
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 400px">
<center>

<h3><?php echo "'".$nomeproduto."' "." Atualizado com sucesso"; ?></h3>

<div style="margin-top:10px">
<a href="_listar_produtos.php" class= "btn btn-sm btn-warning" style="color:#fff">Voltar</a>
</div>
</center>
</div>