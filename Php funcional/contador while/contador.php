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
        $comeca = $_GET["inicio"];
        $termina = $_GET["termino"];
        $contador = $_GET["contagem"];

        if($comeca < $termina){
            while($comeca <= $termina){
                echo "$comeca<br/>";
                $comeca += $contador;
            }
        }

        else{
            while($comeca >= $termina){
                echo "$comeca<br/>";
                $comeca -= $contador;
            }
        }
            
    ?>
</body>
</html>