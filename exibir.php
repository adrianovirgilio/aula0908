<?php
/* Programa Exibir dados do banco
 * Autor: Adriano Virgílio
 * Data: 12/08/2019
 * O script recupera todos os dados do
 * e exibi dentro de uma tabela HTML
*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exibir produtos</title>
</head>
<body>
	<?php
	 $con = mysqli_connect("localhost",
	 					   "root",
						   "usbw",
						   "bd_trufa")
  or die("Erro ao se conectar ao servidor!");
	$banco = mysqli_select_db($con,"bd_trufa")
	or die("Erro ao selecionar o
	  				 banco de dados");
	// Criando comando SQL
 $cmd_sql = "SELECT * FROM tabela_produtos";
 $rs = mysqli_query($con,$cmd_sql);
 //Criando uma tabela
 echo "<table border='1'>";
 // Criando primeira linha da tabela
 echo "<tr>";
 echo "<td colspan='6'>PRODUTOS</td>";
 echo "</tr>";
 // Linha de títulos da tabela
 echo "<tr>";
 echo "<td>Código do produto:</td>";
 echo "<td>Descrição do produto:</td>";
 echo "<td>Preço de custo:</td>";
 echo "<td>Preço de venda</td>";
 echo "<td>Editar</td>";
 echo "<td>Excluir</td>";
 echo "</tr>"; 
 
 while($registro = mysqli_fetch_array($rs)){   echo "<tr>";
   echo "<td>".$registro['codigo']."</td>";
   echo "<td>{$registro['descricao']}</td>";
   echo "<td>{$registro['precoc']}</td>";
   echo "<td>{$registro['precov']}</td>";
   echo "<td><a href='editar.php?cod={$registro['codigo']}'>
   	<img src='ico/editar.png' title='Editar registro...'></a></td>";
						 
   echo "<td><a href='excluir.php?cod={$registro['codigo']}'>
   							<img src='ico/apagar.png'
   							 title='Excluir registro...'></a></td>";
   
   echo "</tr>";
 }
 	?>
    </table>
</body>
</html>