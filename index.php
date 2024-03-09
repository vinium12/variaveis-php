<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07/03</title>
</head>
<body>
    <?php 
    
 if(isset($_GET['operacao']) && isset($_GET['x']) && isset($_GET['y']))
{
    if($_GET['operacao'] == "adição"){
        echo ($_GET['x']+$_GET['y']);
    }
    
    else if($_GET['operacao'] == "subtração"){
        echo ($_GET['x']- $_GET['y']);
    }
    
    else if($_GET['operacao'] == "divisão"){
        echo ($_GET['x'] / $_GET['y']);
    }
    else if($_GET['operacao'] == "multiplicação"){
        echo ($_GET['x']*$_GET['y']);
    }
}
    ?>
</body>
</html>