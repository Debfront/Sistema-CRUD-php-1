<?php
	include 'funcoes_sqli.php';
	$produto = Inserir_Produto();
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container" style="width: 500px">
<center>

<h4><?php echo "Produto '".$produto."' Adicionado com sucesso!"; ?></h4>

</center>
<div style="padding-top: 20px">
<center>
<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
</center>
</div>
</div>