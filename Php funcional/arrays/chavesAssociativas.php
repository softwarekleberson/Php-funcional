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
        $info = array("nome" => "kleberson",
                      "idade" => 27,
                      "sexo" => "M");

        
        $info["fuma"] ="True";

        foreach($info as $k => $c){
            echo "o campo $k possui $c <br>";
        }
    ?>
</body>
</html>