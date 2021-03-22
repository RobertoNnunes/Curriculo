<?php
$cod_curriculo = $_GET["cod_curriculo"];

include ("conexao.php");

$dado = "SELECT * FROM curriculo WHERE cod_curriculo = $cod_curriculo";
$dado = mysqli_query($conexao, $dado);
$dado = mysqli_fetch_array($dado);
?>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editor Currículo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<form name="editar" method="POST" action="salvar.php">
	<input type="hidden" name="cod_curriculo" value=" <?php echo $dado["cod_curriculo"];?>" >

<div class="card">
                <div class="card-body">
                    <h4 class="card-title">Informações gerais</h4>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $dado["nome"]?> ">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="cargo">Cargo pretendido</label>
                                <input type="text" class="form-control" name="cargo" id="cargo" value="<?php echo $dado["cargo"]?> ">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" name="foto" id="foto" value="<?php echo $dado["foto"]?> ">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" id="endereco" value="<?php echo $dado["endereco"]?> ">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" name="telefone" id="telefone" value="<?php echo $dado["telefone"]?> ">
                            </div>
                        </div> 
                        <div class="col">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email" value="<?php echo $dado["email"]?> ">
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="resumo">Resumo</label>
                        <textarea class="form-control" name="resumo" id="resumo" ><?php echo $dado["resumo"]?> </textarea>
                    </div>
                </div>
                <div class="row">
                	<div class="col">
               		 <div class="card-body">
                  		  <label for="formacao">Formação</label>
                    			<input type="formacao" class="form-control" name="formacao" id="formacoes" value="<?php echo $dado["formacao"]?> ">
                		</div>
                	</div>
                	<div class="col">
                       <div class="card-body">
                       		<label for="instituicao">Instituição</label>
                           <input type="instituicao" class="form-control" name="instituicao" id="instituicao" value="<?php echo $dado["instituicao"]?> ">
                       </div>
                  </div> 
                
                	<div class="col">
               		 <div class="card-body">
                  		  <label for="curso">Curso</label>
                    			<input type="curso" class="form-control" name="curso" id="curso" value="<?php echo $dado["curso"]?> ">
                		</div>
                	</div>
                </div>
                 <div class="card-body">
                        <label for="experiencia">Experiência</label>
                        <textarea class="form-control" name="experiencia" id="experiencia" ><?php echo $dado["experiencia"]?></textarea>
                    </div>


				 <div class="card-footer">
                	  <button class="btn btn-primary" type="submit">Salvar currículo</button>
                    
                </div>
            </div>
        </form>
        
    </main>
    
    
</body>
</html>