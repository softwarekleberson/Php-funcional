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

        function soma(int $a, int $b){
            $soma = $a + $b;
            echo "a soma vale $soma <br/>";
        }

        soma(10, 2);
        soma(2,4);

    ?>
</body>
</html>