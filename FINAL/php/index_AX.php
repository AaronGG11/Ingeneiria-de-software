<?php
  session_start();
  $boleta = $_POST["boleta"];
  $contrasena = md5($_POST["contrasena"]);
  $respAX = [];

  $conexion = mysqli_connect("localhost","root","","sem20211");
  $sqlGetAlumno = "SELECT * FROM alumno WHERE boleta = '$boleta' AND contrasena = '$contrasena'";
  $resGetAlumno = mysqli_query($conexion,$sqlGetAlumno);
  $infGetAlumno = mysqli_fetch_row($resGetAlumno);
  if(mysqli_num_rows($resGetAlumno) == 1){
    $_SESSION["boleta"] = $boleta;
    $respAX["cod"] = 1;
    $respAX["msj"] = "Gracias :) ".$infGetAlumno[1]." Bienvenido!!!";
    $respAX["tipoU"] = $infGetAlumno[5];
  }else{
    $respAX["cod"] = 0;
    $respAX["msj"] = "Error. Favor de intentarlo nuevamente";
    $respAX["tipoU"] = $infGetAlumno[5];
  }

  echo json_encode($respAX);
?>