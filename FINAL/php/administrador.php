<?php
  session_start();
  if(isset($_SESSION["boleta"])){
    include("./administrador_BD.php");  
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Pr&aacute;ctica 5 - Admnistraci&oacute;n</title>
<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no'/>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="./../css/general.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
<link href="./../materialize/css/materialize.min.css" rel="stylesheet">
<link href="./../js/plugins/validetta/dist/validetta.min.css" rel="stylesheet">
<link href="./../js/plugins/confirm/dist/jquery-confirm.min.css" rel="stylesheet">
<script src="./../js/jquery-3.5.1.min.js"></script>
<script src="./../materialize/js/materialize.min.js"></script>
<script src="./../js/plugins/validetta/dist/validetta.min.js"></script>
<script src="./../js/plugins/validetta/localization/validettaLang-es-ES.js"></script>
<script src="./../js/plugins/confirm/dist/jquery-confirm.min.js"></script>
<script src="./../js/administrador.js"></script>
</head>
<body>
    <header>
      <img src="./../imgs/header.jpg" class="responsive-img">
      <div class="fixed-action-btn">
        <a class="btn-floating btn-large grey"><i class="fas fa-bars"></i></a>
        <ul>
          <li><a href='./cerrarSesion.php?nombreSesion=boleta' class="btn-floating blue tooltipped" data-position="left" data-tooltip="Cerrar Sesión"><i class="fas fa-power-off"></i></a></li>
        </ul>
      </div>    
    </header>
    <main>
      <div class="container">
        <h4 class="blue-text center-align">Administraci&oacute;n</h4>
        <table class="responsive-table striped centered">
          <thead>
            <tr><th>Boleta</th><th>Nombre</th><th>Opciones</th></tr>
          </thead>
          <tbody>
            <?php echo $trAlmns; ?>
          </tbody>
        </table>
      </div>
    </main>
    <footer class="page-footer blue-grey darken-3">
      <div class="footer-copyright">
          <div class="container">
              © 2020 Copyright
              <a class="grey-text text-lighten-4 right" href="https://www.escom.ipn.mx">UTEYCV - ESCOM</a>
          </div>
      </div>
    </footer>
</body>
</html>
<?php
  }else{
    header("location:./../index.html");
  }
?>