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
        function teste(&$a){
            $a += 2;
            echo "<p>o VALOR SERÁ $a</p>";
        }

        $a = 2;
        teste($a);
        
        echo "<p>o valor sera $a</p>";
    ?>
</body>
</html>