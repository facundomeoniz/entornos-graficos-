<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 </title>
</head>
<body>
    <form action="envio.php" method="POST" >
        <label>mail destino</label>
        <input name="destino" type="email" >
        <br>
        <label>Asunto del mail</label>
        <input type="text" name="asunto" >
        <br>
        <label>Cuerpo del mail</label>
        <input type="text" name="cuerpo" >
        <br>
        <button type="submit" >enviar</button>
    </form>



</body>
</html>

