<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre="alfredo";
    $edad=30;
    $mayor_edad=true;
    var_dump($nombre);
    var_dump($edad);
    var_dump($mayor_edad);
    define("pi",3.1416);// de esta manera podemos declarar constantes en PHP 
    echo"<br>";
    print("mi nombre es: ".$nombre);// la concatenacion se hace con un punto 
    echo"<br>";
    print("la constante pi es:".pi);
    ?>
    
</body>
</html>