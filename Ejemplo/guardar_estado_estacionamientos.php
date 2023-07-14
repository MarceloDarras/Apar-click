<?php
    
    require('conexion.php');
    $estacionamiento = $_POST['estacionamiento'];
    $usuario = $_SESSION['nombre_usuario'];
    $sql1 = "SELECT estacionamiento FROM Espacio_Estacionamiento WHERE estacionamiento = '$estacionamiento'";
    

    if(mysqli_query($conexion, $sql1)){
        echo "El estacionamiento ya se encuantra reservado";  
    }else{
        $sql = "INSERT INTO Espacio_Estacionamiento (estacionamiento, usuario) VALUES ('$estacionamiento','$usuario' )";
        if(mysqli_query($conexion, $sql)){
            echo "Arriendo completado";
        }else{
            echo "Error al registrar el arriendo: " . mysqli_error($conexion);
        }
        
    }

