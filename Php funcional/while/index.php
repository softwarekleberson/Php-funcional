<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="parte1.php">
        <?php
        $n = 1;
        while($n <= 5){
           echo "valor $n: <input type='number' name='vl' max='100' min='0' value='0'/><br/>";
            $n += 1;
        }
        ?>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>