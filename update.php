<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atualizando...</title>
</head>
<body>
<?php
	// Recuperando o código enviado através do botão "Excluir"
	// quando o usuário clicar naquele registro(linha).
	$codigo = $_GET['codigo'];
	// Realizar conexão com o BANCO DE DADOS.
	$conexao = mysqli_connect("localhost","root","usbw","bd_trufa")
			or die("Erro ao conectar com o servidor web!");
	// Criando variável com o banco que será manipulado.
	$banco = mysqli_select_db($conexao,"bd_trufa") 
			or die("Erro ao tentar selecionar a base de dados!");
	// Criando uma var com o comando SQL para apagar o produto 
    // referente ao código enviado pelo URL do navegador.
    $cod = $_GET['codigo'];
    $desc = $_GET['descricao'];
	$pc = $_GET['precoc'];
	$pv = $_GET['precov'];
	$sql = "UPDATE  tabela_produtos SET descricao = '$desc',precoc = $pc, precov = $pv  WHERE codigo = $codigo";
	if(mysqli_query($conexao,$sql))
	{
		mysqli_close($banco);
		echo "<script>alert('Produto atualizado com sucesso');</script>";
		echo "<script>location.href='exibir.php';</script>";
	}
	
	

?>
</body>
</html>