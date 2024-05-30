<?php
    session_name("VISTITANTE");
    session_start();
    session_destroy();
    header("location:Ejercicio_4.php");