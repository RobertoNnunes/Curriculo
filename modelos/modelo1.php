<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currículo | Modelo 1</title>
    <link rel="stylesheet" href="css/modelo1.css">
</head>
<body>
    <main>
        <section class="lateral">
            <img src="<?= $dados['foto']; ?>" alt="Foto" class="foto">
            <h1><?= $dados['nome']; ?></h1>
            <h3><?= $dados['cargo']; ?></h3>
        </section>
        <section class="principal">
            <h2>Resumo</h2>
            
            <p><?= $dados['resumo']; ?></p>
            
            
                <h2>Formação</h2>
					
					<p><?= $dados['formacoes']; ?></p>
					<p><?= $dados['instituicao']; ?></p>
					<p><?= $dados['curso']; ?></p>
                
            
           
                <h2>Experiência</h2>
					
					<p><?= $dados['experiencia']; ?></p>
              
           

            <h2>Contato</h2>

            <ul class="lista-topicos">
                <li>
                    <div>
                        <h4>Endereço:</h4>
                        <p><?= $dados['endereco']; ?></p>
                    </div>
                </li>
                <li>
                    <div>
                        <div>
                            <h4>Telefone:</h4>
                            <p><?= $dados['telefone']; ?></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <div>
                            <h4>Email:</h4>
                            <p><?= $dados['email']; ?></p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </main>
    <script>
        window.print();
    </script>
</body>
</html>