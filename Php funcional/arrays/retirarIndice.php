<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>Retirar elemento do vetor, utilizando o unset</p>

    <?php
        $n = array(1 => 2, 
                   2 => 4,
                   3 => 6,
                   4 => 8
                   );
        
        unset($n[3]);

        foreach($n as $valor){
            print_r("<br> $valor");
        }
    ?>
</body>
</html>