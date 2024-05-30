<?php
    $usuario = "facundomeoniz4@gmail.com";
    $con = "123";

    $usuario_pos = $_POST['cuenta'];
    $con_pos = $_POST['contra'];

    if ($usuario == $usuario_pos && $con == $con_pos){
        session_name("VISTITANTE");
        session_start();

        $_SESSION['tipo'] = "visitante";
        $_SESSION['visitas'] = 1 ;
        echo "cantidad de visitas:". $_SESSION['visitas'];

?>
<html>
        <br>
        <a href="pag1.php">pagina 1</a>
        <br>
        <a href="pag2.php">pagina 2</a>

</html>
<?php      

    }else {
        header("location:Ejercicio_4.php");
    }
?>