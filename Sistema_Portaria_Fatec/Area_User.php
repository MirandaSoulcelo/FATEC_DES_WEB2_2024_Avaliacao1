<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">

        body
        {   
            font: 14px sans-serif; 
            text-align: center;
            width: 100%;
            height: 100vh;
            font-family:sans-serif ;
            background: linear-gradient(-45deg, #666e6c,  #3cb46e, #361a46);
            background-size: 100%;
        }
        .welcome
        {
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="page-header">
        <h1 class="welcome">Olá, Bem vindo! </h1>
    </div>
    <p>
        <a href="cadastro.php" class="btn btn-primary" >Registrar Veículo</a>
    

      

        <a id="link" href="carro.txt" class="btn btn-info" onclick="return verificarArquivo('carro.txt')" >Visualizar Carros</a>

        <a id="link" href="moto.txt" class="btn btn-info" onclick="return verificarArquivo('moto.txt')">Visualizar Motos</a>
        
        <script>
            //Orlando, usei esta função para verificar se existe um arquivo.txt para consulta, caso não, enviarei um alert para o usuario
            function verificarArquivo(arquivo)
            {
            var url = arquivo;
            var http = new XMLHttpRequest();
            http.open('HEAD', url, false);
            http.send();
            if (http.status == 404) 
            {
                alert('Você ainda não registrou nenhum aluno com este veículo.');
                return false;
            }
            return true;
            }
        </script>
    
        <a href="logout.php" class="btn btn-warning">Sair da conta</a>
    </p>
</body>
</html>
