<?php 


    
    $foto = "img/avatar-1.png";


//Gera um array com os dados a serem enviados para impressão no currículo
//Cada elemento do array recebe o valor de um campo do formulário
$dados = array(
    'foto' => $foto,
    'nome' => $_POST['nome'],
    'cargo' => $_POST['cargo'],
    'endereco' => $_POST['endereco'],
    'telefone' => $_POST['telefone'],
    'email' => $_POST['email'],
    'resumo' => $_POST['resumo'],
    'formacoes' => $_POST['formacao'],
    'instituicao' => $_POST['instituicao'],
    'curso' => $_POST['curso'],
    'experiencia' => $_POST['experiencia'], 
                      
);

//Carrega o arquivo referente ao modelo de currículo selecionado
//Quando faz isso, poderemos imprimir o conteúdo da variável $dados no currículo
require_once("modelos/modelo1.php");

include("conexao.php");

$cod_curriculo = $_POST['cod_curriculo'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$resumo = $_POST['resumo'];
$formacoes = $_POST['formacao'];
$instituicao = $_POST['instituicao'];
$curso = $_POST['curso'];
$experiencia = $_POST['experiencia']; 




$sql_update = "UPDATE curriculo SET nome = '$nome', cargo = '$cargo', endereco = '$endereco',
telefone = '$telefone', email = '$email', resumo = '$resumo', formacao = '$formacoes', instituicao = '$instituicao',
curso = '$curso', experiencia = '$experiencia' WHERE cod_curriculo = '$cod_curriculo' ";



if (mysqli_query($conexao, $sql_update)) {

	if (mysqli_affected_rows($conexao) == 1) {
		?>
		
		<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">

		alert ("Registro alterado com sucesso!")
		//window.location.href = "admin.php";
		
		</SCRIPT>
		
		<?php
	}

}
else {
	?>
		<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
		alert ("não foi possível realizar o cadastro")
		windows.history.go(-1);
		</SCRIPT>
	<?php
	exit;
}
mysqli_close($conexao);



?>
