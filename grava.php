<?php
	/* Programa grava produtos
	 * Autor: Adriano Virgílio
	 * Data: 09/08/2019
	 * Descrição: Página que recupera
	 * dados do formulário HTML e grava
	 * os dados na tabela 'tabela_produtos'
	 * do banco de dados 'bd_trufa'.
	*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastrando...</title>
</head>
<body>
	<?php
		// Criando conexão com o servidor
		$conexao = mysqli_connect("localhost","root","usbw","bd_trufa") or die("Erro ao tentar se conectar com o servidor web!");
		$banco = mysqli_select_db($conexao,"bd_trufa") or die ("Erro ao tentar selecionar o banco de dados!");
		// Recuperando dados do formulário HTML
		$desc = $_GET['descricao'];
		$pc = $_GET['precoc'];
		$pv = $_GET['precov'];
		// Criando variável com comando SQL
		$sql = "INSERT INTO tabela_produtos
			    (codigo,descricao,precoc,precov)VALUES
				(null,'$desc',$pc,$pv)";
		// Imprimindo comando na tela para
		// testar dentro do PhpMyAdmin
		//echo $sql;
		// Executando o comando SQl, caso ele seja
		// executado com sucesso, a função query retorna
		// 1(true), caso seja falso, retorna zero.
		if(mysqli_query($conexao,$sql)){
		  echo "<script>alert('Dados gravados com sucesso!');</script>";
		  echo "<script	>location.href='formulario_de_cadastro.html';</script>";
		}else{
		  echo "<script>alert('Não possível realizar cadastro!');</script>";
		  echo "<scrip>history.go(-1);</script>";	
		}			
	?>

</body>
</html>