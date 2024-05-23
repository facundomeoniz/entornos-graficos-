<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <form action="comprobar.php" method="post" >
        nombre: <input name="nombre" >
        <input type="submit" name="submit">
    </form>
    <?php

    $_post['nombre']
    function comprobar_nombre_usuario($nombre){
        //compruebo que el tamaño del string sea válido.
        if (strlen($nombre)<3 || strlen($nombre)>20){
            echo $nombre . " no es válido<br>";
            return false;
        }
        //compruebo que los caracteres sean los permitidos
        $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";

        for ($i=0; $i<strlen($nombre); $i++){
            if (strpos($permitidos, substr($nombre,$i,1))===false){
                echo $nombre . " no es válido<br>";
                return false;
            }
        }

        echo $nombre . " es válido<br>";
        return true;

        }    

    echo 'Mayor de edad';
    ?>
</body>
</html>