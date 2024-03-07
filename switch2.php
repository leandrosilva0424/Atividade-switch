<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
<label for=""></label>
<input name="valor1">

<?php
if($_POST){
    $valor1 = $_POST['valor1'];
    switch ($valor1) 
switch ($valor) {
    case 1:
        echo "vc esta na tabuada 1";
        for($i = 1; $i <= 10; $i++){
            echo $valor1 . "X" . $i . " = " .$valor1 * $i;
            echo "<br>";
        }
        break;
    case 2:
        echo "vc esta na tabuada 2.";
        for($i = 1; $i <= 10; $i++){
            echo $valor1 . "X" . $i . " = " .$valor1 * $i;
            echo "<br>";
        }
        break;
    case 3:
        echo "vc esta na tabuada 3.";
        for($i = 1; $i <= 10; $i++){
            echo $valor1 . "X" . $i . " = " .$valor1 * $i;
            echo "<br>";
        }
        break;
    case 5:
        echo "vc esta na tabuada 4.";
        for($i = 1; $i <= 10; $i++){
            echo $valor1 . "X" . $i . " = " .$valor1 * $i;
            echo "<br>";      
        }
        break;
    case 5:
        echo "vc esta na tabuada 5.";
        for($i = 1; $i <= 10; $i++){
            echo $valor1 . "X" . $i . " = " .$valor1 * $i;
            echo "<br>";
        }
        break;
    case 6:
        echo "vc esta na tabuada 6.";
        for($i = 1; $i <= 10; $i++){
            echo $valor1 . "X" . $i . " = " .$valor1 * $i;
            echo "<br>";
        }
        break;
    case 7:
        echo "vc esta na tabuada 7.";
        for($i = 1; $i <= 10; $i++){
            echo $valor1 . "X" . $i . " = " .$valor1 * $i;
            echo "<br>";
        }
        break;
    case 8:
        echo "vc esta na tabuada 8.";
        for($i = 1; $i <= 10; $i++){
            echo $valor1 . "X" . $i . " = " .$valor1 * $i;
            echo "<br>";
        }
        break;
    case 9:
        echo "vc esta na tabuada 9.";
        for($i = 1; $i <= 10; $i++){
            echo $valor1 . "X" . $i . " = " .$valor1 * $i;
            echo "<br>";
        }
        break;
    case 10:
        echo "vc esta na tabuada 10.";
        for($i = 1; $i <= 10; $i++){
            echo $valor1 . "X" . $i . " = " .$valor1 * $i;
            echo "<br>";
        }
        break;

        default:
    } 
    }
        ?>
</body>
</html>