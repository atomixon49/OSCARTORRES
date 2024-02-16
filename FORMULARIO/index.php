<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "datos";

    $coneccion = mysqli_connect ($servidor, $usuario, $clave, $bd )

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <title>Registrar Usuario</title>
  <style>
form {
  width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;  
  border-radius: 4px;
  background: #f2f2f2;
}

input[type="text"] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="reset"] {
  width: 100%;
  background-color: #555;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

h1{
  text-align: center;
}
</style> 
  </head>
  <body>

  <h1>INSCRIPCION TALENTOS COLOMBIA</h1>
<form  action="#" name="datos" method="post">

<input type="text" name="nombre" placeholder="nombre">
<input type="text" name="correo" placeholder="correo">
<input type="text" name="telefono" placeholder="telefono">
<input type="text" name="direccion" placeholder="direccion">
<input type="text" name="instituto" placeholder="instituto">
<input type="text" name="fecha" placeholder="fecha">
    
<input type= "submit" name="enviar">
<input type= "reset">

</form>
  </body>
<?php

  if(isset($_POST['enviar'])){
      
      $nombre = $_POST['nombre'];
      $correo = $_POST['correo'];
      $telefono = $_POST['telefono'];
      $direccion = $_POST['direccion'];
      $instituto = $_POST['instituto'];
      $fecha = $_POST['fecha'];
      
      $insertar = "INSERT INTO datos Values ('$nombre','$correo','$telefono','$direccion',' $instituto','$fecha', '')";
      
      $coneccion = mysqli_query($coneccion,$insertar);
  }
?>
