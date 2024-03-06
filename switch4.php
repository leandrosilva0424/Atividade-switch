<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$codigoErro = 404;

switch ($codigoErro) {
    case 200:
        echo "OK - Requisição bem-sucedida.";
        break;
    case 404:
        echo "Not Found - Página não encontrada.";
        break;
    case 500:
        echo "Internal Server Error - Erro interno do servidor.";
        break;
    default:
        echo "Código de erro desconhecido.";
        break;
}
     ?>
</body>
</html>