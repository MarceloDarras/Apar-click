<?php
    require('conexion.php');
    require('guardar_estado_estacionamientos.php');
    
    if (mysqli_connect_errno()) {
        die("Error en la conexión a la base de datos: " . mysqli_connect_error());
    }

    
    $sql = "SELECT estacionamiento FROM Espacio_Estacionamiento WHERE estacionamiento = '$estacionamiento'";
    $resultado = mysqli_query($conexion, $sql);

    
    $estacionamientosOcupados = array();
    $fila;
    
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $estacionamientosOcupados[] = $fila['estacionamiento'];
    }

    
    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $columnas; $j++) {
            $numeroEstacionamiento = ($i * $columnas + $j) + 1;
            $boton = '<button class="btn boton1';

            
            if (in_array($numeroEstacionamiento, $estacionamientosOcupados)) {
                $boton .= ' btn-danger" disabled>'; 
            } else {
                $boton .= ' btn-success">'; 
            }

            $boton .= 'Estacionamiento ' . $numeroEstacionamiento . '</button>';

            echo $boton;
        }
    }

    
    mysqli_close($conexion);
?>
