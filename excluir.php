<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Excluindo...</title>
</head>
<body>
<?php
	// Recuperando o código enviado através do botão "Excluir"
	// quando o usuário clicar naquele registro(linha).
	$codigo = $_GET['cod'];
	// Realizar conexão com o BANCO DE DADOS.
	$conexao = mysqli_connect("localhost","root","usbw","bd_trufa")
			or die("Erro ao conectar com o servidor web!");
	// Criando variável com o banco que será manipulado.
	$banco = mysqli_select_db($conexao,"bd_trufa") 
			or die("Erro ao tentar selecionar a base de dados!");
	// Criando uma var com o comando SQL para apagar o produto 
	// referente ao código enviado pelo URL do navegador.
	$sql = "DELETE FROM tabela_produtos WHERE codigo = $codigo";
	if(mysqli_query($conexao,$sql))
	{
		mysqli_close($banco);
		echo "<script>alert('Produto apagado!');</script>";
		echo "<script>location.href='exibir.php';</script>";
	}
	
	

?>
</body>
</html>