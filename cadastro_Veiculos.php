<?php 
  $name = $_POST['nome'];
  $ra = $_POST['ra'];
  $placa = $_POST['placa'];

  if($_POST['veiculo'] == 'carro')
  {
    $filename = "carro.txt";
    if(!file_exists("carro.txt"))
    {
      $handle = fopen("carro.txt", 'w');
    }

    else
    {
      $handle = fopen("moto.txt", 'a');
    }

    fwrite($handle, "Nome: $name<br>\n
    ra: $ra<br>\n
    placa: $placa<br>\n
    <br>-------------------\n<br>");
    
    fclose($handle);

    
    header("location: welcome.php");
  }

  else
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

    fwrite($handle, "Nome: $name<br>\n
    ra: $ra<br>\n
    placa: $placa<br>\n
    <br>-------------------\n<br>");
    
    fclose($handle);
    
  }

?>