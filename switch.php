<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
<label for="">Digite seu time favorito</label>
<input name="time">
  

    </form>
    <br>
    <?php
  if($_POST){
    $valor1 = $_POST['valor1'];

    for($i = 1; $i <= 10; $i++){
      echo $valor1 . "X" . $i . " = " .$valor * $i;
      echo "<br>";





  }

}
   ?>


</body>
</html>