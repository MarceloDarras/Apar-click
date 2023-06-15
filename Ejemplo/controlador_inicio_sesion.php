<?php

    session_start();
    include("conexion.php");
    if (isset($_POST['nombre']) && isset($_POST['password']) ) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['nombre']); 
    $Clave = validate($_POST['password']);

    if (empty($Usuario)) {
        header("Location: inicio_sesion.php?error=El Usuario Es Requerido");
        exit();
    }elseif (empty($Clave)) {
        header("Location: inicio_sesion.php?error=La clave Es Requerida");
        exit();
    }else{

        // $Clave = md5($Clave);

        $Sql = "SELECT * FROM USUARIO WHERE nombre_usuario = '$Usuario' AND contraseña='$Clave'";
        $result = mysqli_query($conexion, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['nombre_usuario'] === $Usuario && $row['contraseña'] === $Clave) {
                $_SESSION['nombre_usuario'] = $row['nombre_usuario'];
                $_SESSION['apellido_usuario'] = $row['apellido_usuario'];
                $_SESSION['id_usuario'] = $row['is_usuario'];
                header("Location: matriz.php");
                exit();
            }else {
                header("Location: inicio_sesion.php?error=El usuario o la clave son incorrectas");
                exit();
            }

        }else {
            header("Location: inicio_sesion.php?error=El usuario o la clave son incorrectas");
            exit();
        }
    }

    } else {
    header("Location: inicio_sesion.php");
            exit();
    }

?>