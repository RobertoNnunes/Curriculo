<?php
include ("conexao.php");
$cod_curriculo = $_GET["cod_curriculo"];
$sql = "DELETE FROM curriculo WHERE cod_curriculo = $cod_curriculo";
if(mysqli_query($conexao, $sql)){

	?>
        <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
			alert ("Ação Realizada com Sucesso!")
			window.location.href = "admin.php";
			</script>
           <?php
    
}
else{
	?>
    	<SCRIPT language="JavaScript" type="text/javascript">
		alert ("Não foi possivel realizar a ação!")
		window.history.go(-1);
		
		</script>
<?php
}
?>