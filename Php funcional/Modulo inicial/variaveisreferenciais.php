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

        $a = 10;
        $b = &$a;
        
        $b+= 5;

        echo "o valor da variavel $a  </br>";
        echo "o valor da variavel $b  </br>";

    ?>
</body>
</html>