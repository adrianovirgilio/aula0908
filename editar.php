<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>
<body>
<?php
  $conexao = mysqli_connect("localhost","root","usbw","bd_trufa")
  			or die("Erro na conexão!");
  $banco = mysqli_select_db($conexao,"bd_trufa")
  			or die("Erro na seleção da base de dados!");
  $codigo = $_GET['cod'];
  $sql = "SELECT * FROM tabela_produtos WHERE codigo=$codigo";
  $rs = mysqli_query($conexao,$sql);
  $registro = mysqli_fetch_array($rs);	
	?>
	<form action="update.php" method="get">
   <p><label>Código:</label></p>
    <p><input type="text" name="codigo" size="5" maxlength="5" readonly value="<?php echo $registro['codigo'];?>"></p>
    <p><label>Descrição do produto:</label></p>
    <p><input type="text" name="descricao" size="50" maxlength="50" required value="<?php echo $registro['descricao'];?>"></p>
	
    <p><label>Preço de custo:</label></p>
    <p><input type="text" name="precoc" size="5" maxlength="5" value="<?php echo $registro['precoc'];?>"><p>
    <p><label>Preço de venda:</label></p>
    <p><input type="text" name="precov" size="5" maxlength="5" required value="<?php echo $registro['precov'];?>"></p>
    <p><input type="submit" value="Atualizar"></p>   
    
    </form>
</body>
</html>
