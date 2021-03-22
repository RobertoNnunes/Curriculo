<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gerador Currículo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Currículo</a>
    </nav>
    <main class="container" style="margin-top:20px">
    <form action="gerarCurriculo.php" method="post" target="_blank" enctype="multipart/form-data">
        <!-- <form name="cadastrar" method="post" action="salvar_curriculo.php"> -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Informações gerais</h4>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="cargo">Cargo pretendido</label>
                                <input type="text" class="form-control" name="cargo" id="cargo">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" name="foto" id="foto">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" id="endereco">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" name="telefone" id="telefone">
                            </div>
                        </div> 
                        <div class="col">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="resumo">Resumo</label>
                        <textarea class="form-control" name="resumo" id="resumo"></textarea>
                    </div>
                </div>
                <div class="row">
                	<div class="col">
               		 <div class="card-body">
                  		  <label for="formacao">Formação</label>
                    			<input type="formacao" class="form-control" name="formacao" id="formacoes">
                		</div>
                	</div>
                	<div class="col">
                       <div class="card-body">
                       		<label for="instituicao">Instituição</label>
                           <input type="instituicao" class="form-control" name="instituicao" id="instituicao">
                       </div>
                  </div> 
                
                	<div class="col">
               		 <div class="card-body">
                  		  <label for="curso">Curso</label>
                    			<input type="curso" class="form-control" name="curso" id="curso">
                		</div>
                	</div>
                </div>
                 <div class="card-body">
                        <label for="experiencia">Experiência</label>
                        <textarea class="form-control" name="experiencia" id="experiencia"></textarea>
                    </div>
                
                <div class="card-footer">
						  <button class="btn btn-primary" type="submit">Gerar currículo</button>
                    <button class="btn btn-default" type="reset">Limpar campos</button>
                         
                    
                </div>
            </div>
            
        </form>
        	
               
                    
        
    </main>
    
   
</body>

</html>
 