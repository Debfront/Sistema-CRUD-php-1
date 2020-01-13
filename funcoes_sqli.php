<?php
	
	
	//Sessão do usuário logado.
	function Começar_Sessao_Usuario(){
		session_start();
		$usuario = $_SESSION['usuario'];

		if(!isset($_SESSION['usuario'])) {
			header('Location: index.php');
		}else{
			return $usuario;
		}
		
	}
	
	//Selecionar o nivel de usuário
	function Selecionar_Nivel_Usuario($usuario){
		include 'conexao.php';
		$sql = " SELECT nivel_usuario FROM usuarios  WHERE mail_usuario = '$usuario' and status1='Ativo' ";
		$buscar = mysqli_query($conexao, $sql);
		$array = mysqli_fetch_array($buscar);
		$nivelusuario = $array['nivel_usuario'];
		
		return $nivelusuario;
	}
	
	//Função pra exibir as categorias no campo de seleção
	function Exibir_Categorias_Selecao(){
		include 'conexao.php';
		$sql = "SELECT * FROM categoria order by nome_categoria ASC";
		$buscar = mysqli_query($conexao, $sql);

		while ($array = mysqli_fetch_array($buscar)) {
			$id_categoria = $array['id_categoria'];
			$nome_categoria = $array['nome_categoria'];
			echo "<option>".$nome_categoria."</option>";
		}
		
	}
	
	//Função pra exibir os fornecedores no campo de seleção
	function Exibir_Fornecedores_Selecao(){
		include 'conexao.php';
		$sql = "SELECT * FROM fornecedor";
		$buscar = mysqli_query($conexao, $sql);

		while ($array = mysqli_fetch_array($buscar)) {
			$id_fornecedor = $array['id_forn'];
			$nome_fornecedor = $array['nome_forn'];
			echo "<option>".$nome_fornecedor."</option>";
		}
	}
	
	//Função para inserir categorias no banco
	function Inserir_Categoria(){
		include 'conexao.php';
		$categoria = $_POST['categoria'];
		$sql= "INSERT INTO categoria (nome_categoria) values ('$categoria')";
		$inserir = mysqli_query($conexao,$sql);
		return $categoria;
	}
	
	//Função para inserir fornecedores no banco
	function Inserir_Fornecedor(){
		include 'conexao.php';
		$fornecedor = $_POST['fornecedor'];
		$sql= "INSERT INTO fornecedor (nome_forn) values ('$fornecedor')";
		$inserir = mysqli_query($conexao,$sql);
		return $fornecedor;
	}
	
	//Função para inserir produtos do formulário no banco
	function Inserir_Produto(){
		include 'conexao.php';

		$nroproduto = $_POST['nroproduto'];
		$nomeproduto = $_POST['nomeproduto'];
		$categoria = $_POST['categoria'];
		$quantidade = $_POST['quantidade'];
		$fornecedor = $_POST['fornecedor'];

		$sql = "INSERT INTO `estoque`( `nroproduto`, `nomeproduto`, `categoria`,`quantidade`,  `fornecedor`) VALUES ($nroproduto, '$nomeproduto','$categoria',$quantidade,'$fornecedor')";
		$inserir = mysqli_query($conexao, $sql);
		return $nomeproduto;
	}
	
	
	//Função para atualizar produto no banco
	function Atualizar_Produto(){
		include 'conexao.php';

		$id= $_POST['id'];
		$nomeproduto = $_POST['nomeproduto'];
		$categoria = $_POST['categoria'];
		$quantidade = $_POST['quantidade'];
		$fornecedor = $_POST['fornecedor'];

		$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`quantidade`=$quantidade,`categoria`='$categoria',`fornecedor`='$fornecedor'
		 WHERE id_estoque = $id";

		mysqli_query($conexao, $sql);	
		return $nomeproduto;
	}
	
	//Função para deletar produto no banco
	function Deletar_Produto(){
		include 'conexao.php';

		$id = $_GET['id'];
		$select = "SELECT nomeproduto FROM estoque WHERE id_estoque = $id";
		$buscar = mysqli_query($conexao, $select);
		while ($array = mysqli_fetch_array($buscar)) {
			$nomeproduto = $array['nomeproduto'];
		}
		
		$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
		mysqli_query($conexao,$sql);
		return $nomeproduto;
	}

?>