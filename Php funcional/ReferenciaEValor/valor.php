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
        function soma($a){
            $a = $a + 2;
            echo "<p>O valor será $a</p>";
        }

        $a = 3;
        soma($a);
        echo "<p>o valor ainda e $a</p>";
    ?>
</body>
</html>