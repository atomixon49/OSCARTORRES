<?php

    if(!empty($_GET["id"])){
        $id=$_GET["id"];
        $sql=$conexion->query(" delete from personas where id_p=$id ");
        if ($sql==1) {
            # code...
            echo '<div class=" alert alert-success">Se elimino correctamente</div>';
        } else {
            # code...
            echo '<div class="alert alert-danger">No se pudo eliminar la persona</div>';
        }
        
    }

?>