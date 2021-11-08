<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Só Games</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body style="background-color: gray">
    <div class="container">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="index.php">Jogos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastrar.php">Cadastrar</a>
                    </li>   
                </ul>
            </div>  
        </nav>
        <div style="background-image: url('images/background.jpg')">
            <div class="col">
                <?php  
                    include("conexao.php");
                    
                    $id_usuario = $_POST['usuario'];
                    $validacao = strlen($id_usuario);
                    $senha_usuario = $_POST['senha'];

                    $query_usuario = "UPDATE clientes set senha_cliente = '$senha_usuario' WHERE cpf_cliente = $id_usuario";
                    $query_empresa = "UPDATE empresas set senha_empresa = '$senha_usuario' WHERE cnpj_empresa = $id_usuario";

                    if($validacao == 11){
                        mysqli_query($conn, $query_usuario);
                        mensagem("Senha atualizada com sucesso!","success");
                    } elseif($validacao == 14) {
                        mysqli_query($conn, $query_empresa);
                        mensagem("Senha atualizada com sucesso!","success");
                    } else {mensagem("Usuário não localizado","danger");}
                ?>
            </div>
            <div class="justify-content-center row"><a href="index.php" class=" btn btn-success">Clique aqui para voltar</a></div>
            <footer class="col text-primary bg-dark">
                <p>NeiVcs 2021</p>
            </footer>
        </div>
    </div>
</body>
</html>