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
        function soma(){

            /*
                Esse primeiro func_get_args()
                cria um vetor que vai variar o seu tamanho de acordo com o numero de argumentos

                func_num_args()
                devolve o tamanho do vetor, a quantidade de casas
            */
            
           $p = func_get_args();
           $t = func_num_args();
           $s = 0;

           for($i = 0; $i < $t; $i++){
                $s += $p[$i];
           }
           return $s;
        }

        $r = soma(3,5,2,8);
        echo "$r";
    ?>
</body>
</html>