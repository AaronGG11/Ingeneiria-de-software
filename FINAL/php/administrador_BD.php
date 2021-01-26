<?php
  include("./configBD.php");

  $sqlAlmns = "SELECT * FROM alumno";
  $resAlmns = mysqli_query($conexion, $sqlAlmns);
  $trAlmns = "<tr>";
  while($filas = mysqli_fetch_array($resAlmns,MYSQLI_BOTH)){
    $trAlmns .= "
    <tr>
      <td>$filas[0]</td>
      <td>$filas[1]</td>
      <td>
        <i class='fas fa-eye ver' data-boleta='$filas[0]'></i>&nbsp;&nbsp;
        <i class='fas fa-edit editar' data-boleta='$filas[0]'></i>&nbsp;&nbsp;
        <i class='fas fa-times eliminar' data-boleta='$filas[0]'></i>&nbsp;&nbsp;
        <i class='fas fa-file-pdf pdf' data-boleta='$filas[0]'></i>&nbsp;&nbsp;
        <i class='fas fa-envelope correo' data-boleta='$filas[0]'></i>
      </td>
    </tr>
    ";
  }
?>