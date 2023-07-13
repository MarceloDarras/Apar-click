<?php
    session_start();
    $estado = FALSE;
    if($_SESSION['nombre_usuario'] == 'Marcelo'){
        $estado = TRUE;
    }