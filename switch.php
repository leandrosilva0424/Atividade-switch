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
   <?php
if (isset($_POST['time'])) {
 $time = $_POST["time"];
 
   switch ($time) {
     case $time;
     echo "Hala $time!";
     break;

     
   
   
    default:  
     echo "Time invalido";       




   }
 
   
   
}  
   
   
   
   
   ?>


</body>
</html>