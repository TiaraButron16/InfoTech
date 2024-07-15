<?php

    session_start();

    include 'conexion.php';

    $correo = $_POST['correo'];
    $contra = $_POST['contra'];
    $VALOR = false;
    
    $resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contra = '$contra'");
    
    $VALOR = mysqli_num_rows($resultado);
    
     if($VALOR > 0){
        $_SESSION['usuario'] = $correo;
         header("location: iniciouser.html");
         exit;
     }else{
        echo'<script>
        alert("USUARIO INVALIDO, VERIFIQUE LOS DATOS");
        window.location.href="Login.php";
        </script>';
     exit;
     }
?>