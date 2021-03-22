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

include ("conexao.php");

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


$verifica=mysqli_query($conexao, "INSERT INTO curriculo VALUES (NULL, '$nome', '$cargo', '$endereco', '$telefone', '$email', '$resumo', 
'$formacoes', '$instituicao', '$curso', '$experiencia')") or die ("Erro ao inserir usuario - Contate o administrador do sistema!".mysqli_error($conexao));


if($verifica==1)
	{
		echo "<script>alert('Cadastro realizado com sucesso!');
		</script>";
		//echo "<script>window.location = 'admin.php'</script>";
		
		
	}

	mysqli_close($conexao);




?>