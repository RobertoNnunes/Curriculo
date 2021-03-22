<?php
include ("conexao.php");
?>
<body>
<table width="100%" border="1">
<tr>
	<td> Ações </td>
    <td> Nome </td>
    
</tr>

<?php

$consulta = "SELECT cod_curriculo, nome FROM curriculo";

$dado = mysqli_query($conexao, $consulta) or die ("Erro na Consulta: $query.". mysqli_error($conexao));
while($linha = mysqli_fetch_array($dado)) {
	$cod_curriculo = $linha["cod_curriculo"];
	$nome = $linha["nome"];
	
	
echo "
		<tr>
			<td> 
			<a href=\"editar.php?cod_curriculo=$cod_curriculo\">[Editar]</a>
			<a href=\"excluir.php?cod_curriculo=$cod_curriculo\">[Excluir]</a>
			
			
			</td>	
			
			<td>&nbsp;$nome</td>
			
							
		</tr>
\n";

}
mysqli_close($conexao)

?>

</table>
</body>