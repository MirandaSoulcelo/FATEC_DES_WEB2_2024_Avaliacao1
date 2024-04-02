<?php
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true )
  {
    header("location: index.php");
    exit;
  }

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href=Css/Form.css>
    <script src= "https://kit.fontawesome.com/69204fda25.js" 
    crossorigin="anonymous"></script>
    <script>
        //Essa daqui eu usei para tirar o 'required' dos inputs para possibilitar voltar a area de funcionalidades quando o usuario clicar em voltar
            function removeRequired()
            {
                var inputFields= document.querySelectorAll("input[required]");
                inputFields.forEach(function(input)
                {
                    input.removeAttribute("required");
                });
                <?php
                     if(isset($_POST["return"]))
                     {

                      header("location: index.php");
                        die();
                     } 
                ?>
               
            }
    </script>
  


</head>
<body>
    <div id= "form">
        <form action="cadastro_Veiculos.php" method="post">
            <h2 class= title>Cadastro</h2>

            <label for="nome">Nome</label>
            <div class="input">
      
                <input type="text" name="nome" placeholder="Nome" required>
            </div>

            <label for= "ra">RA</label>
            <div class="input">
                <input type="txt" name="ra" placeholder="00000000000" required>
            </div>

            <label for= "placa">Placa</label>
            <div class="input">
                <input type="txt" name="placa" placeholder="Placa"  required>
            </div>


            
            <input type="radio" name="veiculo" value="carro" id="carro" required >Carro
           

            
        
            <input type="radio" name="veiculo" id="moto" value="moto" required>Moto
          
            
            <div id="btn">
                <button type="submit" value="Enviar">Enviar</button>
            </div>
            

            <div id= "btn">
                <button type="submit" onclick="removeRequired()"  name="return">Voltar</button>
            </div>
        </form>
    </div>
    
</body>
</html>