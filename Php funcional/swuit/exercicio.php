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

        $n = $_GET["num"];
        $opcao = $_GET["oper"];

        $res;
        
        switch($opcao){
            case 1: 
                $res = $n * 2;
            break;

            case 2:
                $res = pow($n, 3);
                break;

            case 3:
                $res = sqrt($n);
                break;
        }

        echo "o resultado da operacao foi $res";

    ?>
    
</body>
</html>