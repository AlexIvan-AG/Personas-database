<?php

    $conexion = new mysqli("localhost", "id19456064_usuario", "Yosoypol@r1357", "id19456064_personas");
    if($conexion){
        echo "conexion exitosa";
    } else{
        echo "fallo la conexion";
    }
?>