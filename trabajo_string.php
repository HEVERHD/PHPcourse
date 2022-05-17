<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .resaltar {
            color: #f000f0;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php
    // para ignorar doble comillas class=\"resaltar\">

    $variable1 = "Casa";
    $variable2 = "CASA";

    $resultado = strcasecmp($variable1, $variable2); //devuelve 1 si no son iguales y devuelve 0 si son iguales
    if ($resultado) {

        echo "No son iguales";
    } else {

        echo "Son iguales";
    }



    ?>

</body>

</html>