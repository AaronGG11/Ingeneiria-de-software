<?php
  session_start();
  if(isset($_SESSION["boleta"])){
    $boleta = $_SESSION["boleta"];
    $conexion = mysqli_connect("localhost","root","","sem20211");
    $sqlInfAlumno = "SELECT * FROM alumno WHERE boleta = '$boleta'";
    $resInfAlumno = mysqli_query($conexion, $sqlInfAlumno);
    $infAlumno = mysqli_fetch_row($resInfAlumno);
  }else{
    header("location:./../index.html");
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Pr&aacute;ctica 5 - Area reservada</title>
<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no'/>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
<link href="./../materialize/css/materialize.min.css" rel="stylesheet">
<link href="./../js/plugins/validetta/dist/validetta.min.css" rel="stylesheet">
<link href="./../js/plugins/confirm/dist/jquery-confirm.min.css" rel="stylesheet">
<script src="./../js/jquery-3.5.1.min.js"></script>
<script src="./../materialize/js/materialize.min.js"></script>
<script src="./../js/plugins/validetta/dist/validetta.min.js"></script>
<script src="./../js/plugins/validetta/localization/validettaLang-es-ES.js"></script>
<script src="./../js/plugins/confirm/dist/jquery-confirm.min.js"></script>
<script>
  $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
    $('.tooltipped').tooltip();
  });
</script>
</head>
<body>
    <header>
      <div class="fixed-action-btn">
        <a class="btn-floating btn-large red"><i class="fas fa-bars"></i></a>
        <ul>
          <li><a href='./cerrarSesion.php?nombreSesion=boleta' class="btn-floating blue tooltipped" data-position="left" data-tooltip="Cerrar Sesión"><i class="fas fa-power-off"></i></a></li>
        </ul>
      </div>
    </header>
    <main>
      <div class="container">
        <?php
          echo "$infAlumno[0] $infAlumno[1] $infAlumno[2] $infAlumno[3]";
        ?>
      </div>
    </main>
    <footer>

    </footer>
</body>
</html>