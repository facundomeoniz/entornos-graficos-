<?php
    session_name('cliente');
    session_start();
    $_SESSION['CUENTA'] = "nombre@gmail.com";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="POST" action="envio_reco.php">
        <h1>Compartir </h2>
        <p>Porfavor ingrese los datos de su amigo</p>
        <input type="text"  placeholder="Nombre amigo" name="nombre_amigo" >
        <input type="email"  placeholder="email_amigo" name="mail_amigo" >
        
        <p>Ingrese el motivo de la recomendacion</p>

        <textarea class="form-styles" rows="5" cols="50"placeholder="Escribe una recomendación" name="mensaje" required="" value="Te recomiendo esta pagina porque "></textarea>
        <br>
        <input  type="submit" value="Enviar " name="entrada">
        

    </form>
</body>
</html>