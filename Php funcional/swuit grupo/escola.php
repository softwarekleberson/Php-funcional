<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $dia = $_GET["dia"];
        
        switch($dia){
            case 1:
            case 2:
            case 3:
                echo "opcao 1 vai para a escola";
            break;

            case 4:
            case 5:
                echo "opcao 2 vai ter aula, proximo do fim de semana";
            break;

            default:
                echo "fim de semana";
        }

    ?>
    
</body>
</html>