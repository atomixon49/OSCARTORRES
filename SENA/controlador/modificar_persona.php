<?php

    if (!empty($_POST["btnregistrar"])){
        if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
            $id=$_POST["id"];
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"]; 
            $dni= $_POST["dni"];   
            $fecha =$_POST["fecha"];  
            $correo=$_POST['correo'];
            $sql=$conexion->query(" update personas set nombres='$nombre', apellidos='$apellido', dni='$dni', fecha='$fecha', correo='$correo' where id_p = $id");
            if ($sql==1) {
                # code...
                header("location:index.php");
                 echo "Registrado Correctamente";
            } else {
                # code...
                echo "<div class='alert alert-danger'>Error al modificar los campos</div>";
            }
            
        }else{
        echo "<div class='alert alert-warning'>Campos Vacios</div>";
    }
    }
?>