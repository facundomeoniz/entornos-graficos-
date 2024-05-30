<?php
    $destino = $_POST['destino'];
    $asunto = $_POST['asunto'];
    $cuerpo = $_POST['cuerpo']

    mail($destino, $asunto, $cuerpo) //no se envia realmente, por que el servidor xampp no esta configurado realmente, se puede usar una alternativa a esta funcion.