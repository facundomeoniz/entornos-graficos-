<?php
    session_name('cliente');
    session_start();

    if(isset($_SESSION['CUENTA'])){
        $destino=$_POST['mail_amigo'];
        $asunto="Recomendacion de pagina web";
        $nombre_aigo=$_POST['nombre_amigo']
        $cuerpo= "HOLA!!  $nombre_amigo Te mando esta pagina  por que, $_POST['mensaje'] ";

        mail($destino, $asunto, $cuerpo);
    }