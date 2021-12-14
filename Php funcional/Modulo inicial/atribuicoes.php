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
        $a = -5;
        $b = 3;
        $c = 2;
        $d = 3.14;
        $formato = 4.148710;

        echo "</br> o valor absoluto de $a e " .abs($a);
        echo "</br> o pow de $c elevado a $b vale " .pow($c, $b);
        echo "</br> a raiz de $b vale " .sqrt($b);
        echo "<br/> o valor de $d arredondado vale " .round($d);
        echo "<br/> a parte inteira de $d vale " .intval($d); 
        echo "<br/> o numero $formato em duas casas decimais vale <br/> " .number_format($formato, 2);

    ?>
</body>
</html>