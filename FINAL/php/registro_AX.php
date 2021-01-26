<?php
  $boleta = $_POST["boleta"];
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $fechaNac = $_POST["fechaNac"];
  $contrasena = md5($_POST["contrasena"]);

  $conexion = mysqli_connect("localhost","root","","sem20211");
  $sqlInsAlumno = "INSERT INTO alumno VALUES('$boleta','$nombre','$correo','$fechaNac','$contrasena',NOW())";
  $resInsAlumno = mysqli_query($conexion,$sqlInsAlumno);
  $respAX = [];
  if(mysqli_affected_rows($conexion) == 1){
    $respAX["cod"] = 1;
    $respAX["msj"] = "Gracias :) Tu registro se guard&oacute; correctamente.";
  }else{
    $respAX["cod"] = 0;
    $respAX["msj"] = "Error. Favor de intentarlo nuevamente";
  }

  echo json_encode($respAX);
?>