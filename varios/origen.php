<?php
//incluimos los archivos necesarios e inicializamos sus objetos
require_once '../bbdd/sesiones.php';
$sesion = new Sesiones();
require_once '../bbdd/empleados.php';
$empleado = new Empleados();
//comprobamos si hay una sesion iniciada
if (isset($_SESSION['usuario'])) {
  //saacamos el nombre del usuario con la sesion iniciada
  $usuario = $empleado -> EmpleadoUser($_SESSION['usuario']);
 ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>ELEGIR ORIGEN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css" type="text/css" media="all">
  <script src="../pace/pace.js"></script>
  <link rel="shortcut icon" href="../assets/ico/favicon.ico">
  <script type="text/javascript" src="../comprobar.js"></script>
  <script type="text/javascript" src="tiempo.js"></script>

  <!-- Links para alerts y confirms -->
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="../jquery/jquery-confirm.css">
    <script src="../jquery/jquery-confirm.js"></script>

</head>

<body onload="borrar();">
  <header>
    <span class="izquierda">
      <a href="../roles.php" id='roles'>ROLES</a>
      <a  href= "#"><img src="../assets/img/logo.png" alt="logo TSI" title="Logo TSI" width="auto" height="50" /></a>
    </span>
    <br>
    <span class="derecha" onclick = "botonSalir();"><a>SALIR</a></span>
    <br>
    <br>
    <h3><?php echo $usuario['user']; ?></h3>
  </header>
  <div class="two-columns">
    <!--<p style="font-weight: bold; font-size:16px; float: left;">TOTAL: <script>document.write(localStorage.contador);</script></p>-->
    <p style="font-weight: bold; font-size:16px; float: right;">VARIOS</p>
    <form class="contact_form" action="bastidor.php" method="post" enctype="multipart/form-data">
      <ul>
        <li>
          <label for="origen" id="titulo">ORIGEN</label>
          <div class="wrap">
            <label id="lab">
              <input type="radio" id="opcion1" name="origen" value="P12" onclick="comprobar();">
               <div  class="btn btn-sık"><span>P12</span></div>
            </label>
            <label id="lab">
              <input  type="radio" id="opcion2" name="origen" value="FCPA" onclick="comprobar();">
             <div class="btn btn-sık"><span>FCPA</span></div>
           </label>
           <label id="lab">
             <input  type="radio" id="opcion3" name="origen" value="VQC" onclick="comprobar();">
            <div class="btn btn-sık"><span>VQC</span></div>
          </label>
          <label id="lab">
            <input  type="radio" id="opcion4" name="origen" value="P.COLORES" onclick="comprobar();">
           <div class="btn btn-sık"><span>P.COLORES</span></div>
         </label>
          </div>
          <select class="" name="otrosOrigenes" id="otro" onchange="bloquear();">
             <option value="primera" selected disabled>OTRAS ZONAS</option>
             <option value="CANOPY" onchange="bloquear();">CANOPY</option>
             <option value="P9" onchange="bloquear();">P9</option>
             <option value="MALVINAS" onchange="bloquear();">MALVINAS</option>
             <option value="CIRCUITO" onchange="bloquear();">CIRCUITO</option>
             <option value="P0" onchange="bloquear();">P0</option>
             <option value="SP9" onchange="bloquear();">SP9</option>
             <option value="RAI" onchange="bloquear();">RAI</option>
             <option value="MOLINO" onchange="bloquear();">MOLINO</option>
             <option value="ZENDER" onchange="bloquear();">ZENDER</option>
             <option value="MOVA1" onchange="bloquear();">MOVA1</option>
             <option value="MORERAS" onchange="bloquear();">MORERAS</option>
             <option value="CARPA" onchange="bloquear();">CARPA</option>

             <option value="MOVA2" onchange="bloquear();">MOVA2</option>
             <option value="PUVA" onchange="bloquear();">PUVA</option>
             <option value="RAVA" onchange="bloquear();">RAVA</option>
             <option value="RAVA2" onchange="bloquear();">RAVA2</option>
             <option value="SP9VA" onchange="bloquear();">SP9VA</option>
             <option value="PRPB" onchange="bloquear();">PRPB</option>
             <option value="CAMPA" onchange="bloquear();">CAMPA</option>
             <option value="P.BLANCO" onchange="bloquear();">P.BLANCO</option>
             <option value="PINTURAS" onchange="bloquear();">PINTURAS</option>
             <option value="RINCON AMERICANO" onchange="bloquear();">RINCON AMERICANO</option>

           </select>
        </li>
      </ul>
  </div>

  <div class="botones">
    <button type="submit" name="button" id="siguiente"><b>SIGUIENTE</b></button>
    <button type="reset" name="button" id="reset" onclick="devolver();"><b>LIMPIAR</b></button>
    <button type="button" name="button" id="atras" onclick="window.location = 'borrarBastidor.php';"><b>BORRAR</b></button>
  </div>
  </form>

</body>

</html>
<?php
}else {
  // si no hay ninguna sesion iniciada, le devolvemos a la pagina de inicio de sesion
  ?>
    <script type="text/javascript">
      window.location = "../index.php";
    </script>
  <?php
}
 ?>
