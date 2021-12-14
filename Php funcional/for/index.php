<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Escolha qual tabuada deseja saber</h3>

    <form method="get" action="tabuada.php">
        <select name="tabuada">

            <?php
                for($c = 1; $c <= 10; $c ++){
                    echo "<option>$c</option>";
                }
            ?>
        </select>

        <input type="submit" value="Enviar"/>

    </form>

</body>
</html>