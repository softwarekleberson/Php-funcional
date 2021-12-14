<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php

            $v = array("z","x","c","v","b","n","m");
            array_unshift($v, 10);
            print_r($v);

            array_shift($v);
            print_r($v);

            $valores = array(10,8,5,11,2,1,6,9);

            asort($valores);
            var_dump($valores);

            arsort($valores);
            var_dump($valores);

            sort($valores);
            print_r($valores);

            rsort($valores);
            print_r($valores);

            asort($valores);
            var_dump($valores);

        ?>
    </pre>
</body>
</html>