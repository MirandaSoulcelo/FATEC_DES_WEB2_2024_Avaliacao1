<?php

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        session_start();
        if($_POST['username'] == 'Portaria' and $_POST['password'] == 'FatecAraras')
        {
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['username'] = 'Portaria';
            header("location: Area_User.php");

        }

        else
        {
            $_SESSION['loggedin'] = FALSE;
        }
    }


?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href=Css/Form.css>
    <script src= "https://kit.fontawesome.com/69204fda25.js" 
    crossorigin="anonymous"></script>


</head>
<body>
    <div id= "form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h2 class= title>Login</h2>

            <label for="username">Username</label>
            <div class="input">
                <i class="fa fa-user-circle-o"></i>
                <input type="text" name="username" placeholder="Username">
            </div>

            <label for= "password">Password</label>
            <div class="input">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Password" >
            </div>

            <div id="btn">
                <button type="submit" value="Acessar">Enviar</button>
            </div>
        </form>
    </div>
    
</body>
</html>