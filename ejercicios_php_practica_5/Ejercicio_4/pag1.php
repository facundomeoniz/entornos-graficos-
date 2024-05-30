<?php
    session_name("VISTITANTE");
    session_start();

    if (isset($_SESSION['tipo']) && isset($_SESSION['visitas'])){
        $_SESSION['visitas'] ++;
        echo $_SESSION['visitas'];
    }else{
        header("location:Ejercicio_4.php");
    }
?>

<html>
    <h3>Tambien puedes ir a: </h3>
    <a href="pag2.php">pagina 2</a>

    <h3>O puedes cerrar sesion </h3>

    <form action="cerrar.php" method="POST" >
        <button type="submit" >cerrar session</button>
    </form>
</html>
