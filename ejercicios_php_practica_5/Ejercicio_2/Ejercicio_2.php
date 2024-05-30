<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <div>
        <h1>Contacto</h1>
        <div>
            <h2>Por favor ingrese los datos para contactarnos </h2>
            <form action="envio.php" method="POST" >
                <label>Ingrese el motivo por el cual se comunica con nosotros</label>
                <input type="text" name="asunto" >
                <br>
                <label>Especifique el problema, duda, inquietud o sugerencia</label>
                <input type="text" name="cuerpo" >
                <br>
                <button type="submit" >enviar</button>
            </form>
        </div>
    </div>


</body>
</html>