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
            $v = array("a","b","c","d");
            print_r($v);

            array_push($v, "W");
            print_r($v);

            array_pop($v);
            print_r($v);
        ?>
    </pre>
</body>
</html>