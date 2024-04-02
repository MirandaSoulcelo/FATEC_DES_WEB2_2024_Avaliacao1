<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/65f22fe718.js" crossorigin="anonymous"></script>
    <style type="text/css">
        body{ font: 14px sans-serif; 
            text-align: center;
            width: 100%;
            height: 100vh;
            font-family:sans-serif ;
            background: linear-gradient(-45deg, #666e6c, #504f20, #361a46);
    background-size: 100%;
          ;}
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, Bem vindo!</h1>
    </div>
    <p>
        <a href="cadastro.php" class="btn btn-primary" >Cadastro Carro</a>
    

        <a href="cadastro.php" class="btn btn-primary">Cadastro Moto</a>

        <a href="carro.txt" class="btn btn-info">Consultar carros</a>

        <a href="moto.txt" class="btn btn-info">Consultar motos</a>

        <a href="logout.php" class="btn btn-warning">Sair da conta</a>
    </p>
</body>
</html>