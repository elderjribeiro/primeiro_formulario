<?php
/**
 * Created by PhpStorm.
 * User: Suporte
 * Date: 23/09/2019
 * Time: 13:03
 */
echo "<pre>";
       $seunome = $_POST['nome'];
       $idade  = $_POST['idade'];

       if($idade < 18){

           $msg = "Menor de idade";
       }
       else{
           $msg =  "Maior de idada";
       }

echo "</pre>";
?>

<!DOCTYPE HTML>
<html lang=”pt-br”>
<head>
    <meta charset=”UTF-8”>
    <link rel=”stylesheet” type=”text/css” href=”estilo.css”>
    <title></title>
</head>
<body>
<form method="post">
    <input name="nome"><br>
    <input name="idade"><br>
    <input type="submit" value="Salvar">
</form>
<h1><?php echo @$msg ;?> </h1>
</body>
</html>
