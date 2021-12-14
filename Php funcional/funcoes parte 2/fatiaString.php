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
        $site = "curso em video";
        $sub = substr($site, 0,5);
        print($sub);
        print('<br>');
        print(substr($site, 9,5));
    ?>
</body>
</html>