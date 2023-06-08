<?php

    if(!empty($_POST["registro"])){
        if(empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["correo"]) or empty($_POST["password"]) or empty($_POST["password2"]) or empty($_POST["telefono"])){

            echo 'Uno de los campos está vacío';

        }else{
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $correo=$_POST["correo"];
            $password=$_POST["password"];
            $password2=$_POST["password2"];
            $telefono=$_POST["telefono"];
            $sql=$conexion->query("INSERT INTO USUARIOI(nombre_usuario, apellido_usuario) VALUES('$nombre', '$apellido', '$correo', '$password2')")
            if($sql ==1){
                echo 'Usuario registrado correctamente';
            }else{
                echo 'Alguno de los datos es invalido';
            }
        }
    }

?>