<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
<label for="">Qual é a sua idade?</label>
<input name="idade">

   <?php
  
   if (isset($_POST["idade"])){
    $idade = $_POST["idade"]; 
    switch ($idade) {
       case ($idade < 18):
           echo "Você é menor de idade.";
           break;
       case ($idade >= 18 && $idade < 60):
           echo "Você é adulto.";
           break;
       case ($idade >= 60):
           echo "Você é idoso.";
           break;
       default:
           echo "Idade inválida.";
           break;
   }
}
  ?>

</body>
</html>