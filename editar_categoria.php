<?php
include 'conexao.php';
$id = $_GET['id']
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu primeiro script</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
  #tamanhoContainer{
    width: 500px;
  }
  #botao{
    background-color: #ff1168;
    color: #ffffff;
  }
</style>

</head>
<body>

<div class="container" id="tamanhoContainer">


<div class="form-group" style= "margin-top: 40px">
<h4>Formulário de Edição</h4>
<form action="_atualizar_categoria.php"  method="post" style="margin-top: 20px">
<?php
$sql= "SELECT * FROM `categoria` WHERE id_categoria= $id";
$buscar = mysqli_query($conexao, $sql);
while ($array= mysqli_fetch_array($buscar)){
    $id_categoria = $array['id_categoria'];
    $nomecategoria = $array['nome_categoria'];
   
?>
  
<div class="form-group" style= "margin-top: 40px">
    <label>Nome categoria</label>
    <input type="text" class="form-control" name="nomecategoria" value="<?php echo $nomecategoria?>">
    <input type="text" class="form-control" name="id" value="<?php echo $id_categoria?>" style="display:none">
</div>


  
  <div style= "text-align:right";>
  <button type="submit" id="botao"class="btn btn-sm" > Atualizar </button>
  </div>
  <?php } ?>
</form>
</div>







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>