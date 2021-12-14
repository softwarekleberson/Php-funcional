<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $regiao = $_GET['estados'];
        
        switch($regiao){
            case 'Para':
            case 'Amazonas':
            case 'Acre':
            case  'Rondonia':
            case 'Roraima':
                echo "Regiao Norte";
            break;

            case 'Bahia':
            case 'Pernambuco':
            case 'Ceara' :
            case 'Piaui' :
            case 'Alagoas':
            case 'Sergipe':
            case 'Paraiba':
            case 'Maranhao':
            case 'Rio-Grande-do-Norte':
                echo "Região Nordeste";
            break;

            case 'Rio-de-Janeiro':
            case 'Espirito-Santo':
            case 'Sao-Paulo':
            case 'Minas-Gerais':
                echo "Região Sudeste";
            break;

            case 'Santa-Catarina':
            case 'Rio-Grande-do-Sul':
            case 'Parana':
                echo "Região sul";
            break;

            case 'Tocantis':
            case 'Goias':
            case 'Distrito Federal':
            case 'Mato-Grosso':
            case 'Mato-Grosso-do-Sul':
                echo "Região Centro-Oeste";
            break;
        }
    ?>

    
</body>
</html>