<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>range : começa em 2 vai até 20 pula de 2 em 2</p>
    <pre>
        <?php
        $n = range(2,20,2);
        foreach ($n as $v){
            echo "$v ";
        }
        ?>
    </pre>
    
</body>
</html>