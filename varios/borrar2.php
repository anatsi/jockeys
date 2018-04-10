<?php
//incluimos los archivos necesarios e inicializamos sus objetos
require_once '../bbdd/sesiones.php';
$sesion = new Sesiones();
require_once '../bbdd/empleados.php';
$empleado = new Empleados();
require_once '../bbdd/movimientos.php';
$movimientos = new Movimientos();
//sacamos el usuario de la sesion iniciada
$usuario = $empleado -> EmpleadoUser($_SESSION['usuario']);
 ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>BORRAR MOVIMIENTO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css" type="text/css" media="all">
  <script src="../pace/pace.js"></script>
  <link rel="shortcut icon" href="../assets/ico/favicon.ico">
  <script type="text/javascript" src="../comprobar.js">

  </script>
</head>

<body>
  <?php
  //sacamos el ultimo movimiento que ha hecho ese usuario
    $ultimoMovimiento = $movimientos ->UltimoMovimiento($_POST['bastidor']);
   ?>
  <header>
    <span class="izquierda">
    	<a  href= "#"><img src="../assets/img/logo.png" alt="logo TSI" title="Logo TSI" width="auto" height="50" /></a>
    </span>
    <br>
    <br>
    <h3>
      <?php echo $usuario['user']; ?>
      <br>
      <?php echo $_POST['bastidor']; ?>
    </h3>
  </header>
    <div class="two-columns">

      <form class="contact_form" action="borrarddbb.php?id=<?php echo $ultimoMovimiento['id']; ?>" method="post" enctype="multipart/form-data">
        <ul>
          <li>
            <select class="" name="origen" id="otro">
               <option value="primera" selected disabled>NUEVO ORIGEN</option>
               <option value="P12">P12</option>
               <option value="FCPA">FCPA</option>
               <option value="VQC">VQC</option>
               <option value="P.COLORES">P.COLORES</option>
               <option value="CANOPY">CANOPY</option>
               <option value="P9">P9</option>
               <option value="MALVINAS">MALVINAS</option>
               <option value="CIRCUITO">CIRCUITO</option>

               <option value="SP9">SP9</option>
               <option value="RAI">RAI</option>
               <option value="MOLINO">MOLINO</option>
               <option value="ZENDER">ZENDER</option>
               <option value="MOVA1">MOVA1</option>
               <option value="MOVA2">MOVA2</option>
               <option value="PUVA">PUVA</option>
               <option value="RAVA">RAVA2</option>
               <option value="RAVA2">RAVA2</option>
               <option value="SP9VA">SP9VA</option>
               <option value="PRPB">PRPB</option>
               <option value="CAMPA">CAMPA</option>

             </select>
          </li>
          <li>
            <select class="" name="destino" id="otro">
               <option value="primera" selected disabled>NUEVO DESTINO</option>
               <option value="P9">P9</option>
               <option value="SP9">SP9</option>
               <option value="MALVINAS">MALVINAS</option>
               <option value="P12">P12</option>
               <option value="ZENDER">ZENDER</option>
               <option value="MOVA1">MOVA1</option>
               <option value="MOVA2">MOVA2</option>
               <option value="PUVA">PUVA</option>
               <option value="RAVA">RAVA</option>
               <option value="RAVA">RAVA2</option>
               <option value="SP9VA">SP9VA</option>
               <option value="RAI">RAI</option>
               <option value="MOLINO">MOLINO</option>

               <option value="FCPA">FCPA</option>
               <option value="VQC">VQC</option>
               <option value="P.COLORES">P.COLORES</option>
               <option value="CIRCUITO">CIRCUITO</option>
               <option value="PRPB">PRPB</option>
               <option value="CAMPA">CAMPA</option>
               <option value="CANOPY">CANOPY</option>

             </select>
          </li>
        </ul>
        <?php
        //guardamos el bastidor escaneado en un input pra pasarlo a la siguiente pagina
          echo "<input type='hidden' name='bastidor' value='".$_POST['bastidor']."'>";
         ?>
    </div>
  <div class="botones">
    <button type="submit" name="button" id="siguiente"><b>ACEPTAR</b></button>
    <button type="button" name="button" id="atras" style="width: 98%;" onclick="window.location = 'origen.php';"><b>ATRÁS</b></button>
  </div>
</form>
</body>
</html>
