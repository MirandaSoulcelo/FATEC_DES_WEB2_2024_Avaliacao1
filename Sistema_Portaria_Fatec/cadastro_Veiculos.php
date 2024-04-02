<?php 

  $name = $_POST['nome'];
  $ra = $_POST['ra'];
  $placa = $_POST['placa'];


  if($_POST['veiculo'] == 'carro' && $_POST['nome'] != null && $_POST['ra'] != null && $_POST['placa'] != null )
  {
    $filename = "carro.txt";
    
    if(!file_exists("carro.txt"))
    {
      $handle = fopen("carro.txt", 'w');
     
    }

    else
    {
      $handle = fopen("carro.txt", 'a');

    }


    fwrite($handle, "$name/$ra/$placa\n");
    
    fclose($handle);

    
    header("location: Area_User.php");
  

  }

  else if($_POST['veiculo'] == 'moto' && $_POST['nome'] != null && $_POST['ra'] != null && $_POST['placa'] != null)
  {
    $filename = "moto.txt";


    if(!file_exists("moto.txt"))
    {
      $handle = fopen("moto.txt", 'w');
    }
    

    else
    {
      $handle = fopen("moto.txt", 'a');
    }


    fwrite($handle, "$name|$ra|$placa\n");
    
    fclose($handle);
    header("location: Area_User.php");
    
  }


  else{
    header("location: Area_User.php");
    die();
  }

?>