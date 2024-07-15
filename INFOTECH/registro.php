<?php

    include 'conexion.php';

    $nombre = $_POST['Nombre'];
    $correo = $_POST['Correo'];
    $contra = $_POST['Contraseña'];


    $ci = "INSERT INTO usuarios(Nombre,Correo,Contraseña) 
              VALUES('$nombre','$correo','$contra')";

    $ejecutar = mysqli_query($conexion, $ci);

    if($ejecutar){
        echo '
        <script> 
        alert("USUARIO REGISTRADO EXITOSAMENTE.");
        window.location = "inicio_sesion.html";
        </script> 
        ';
    }else{
        echo '
        <script> 
        alert("ERROR AL REGISTRAR EL USUARIO, INTENTE NUEVAMENTE");
        window.location = "registro.html";
        </script>
        ';
    }
    
    mysqli_close($conexion);
?>