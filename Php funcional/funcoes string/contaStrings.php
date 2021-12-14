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

        /*conta strings na frase*/

        $nome = "kleberson dos santos silva";
        $cont = str_word_count($nome,0);
        echo $cont;
        echo "<br/><br/>";


        $array = str_word_count($nome, 1);
        print_r($array);
        echo "<br/><br/>";

        $novo = str_word_count($nome, 2);
        print_r($novo);
    ?>
</body>
</html>