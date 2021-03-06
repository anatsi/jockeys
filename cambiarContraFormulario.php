<?php
//incluimos los archivos necesarios e inicializamos sus objetos
require_once './bbdd/sesiones.php';
$sesiones = new Sesiones();
//comprobamos si hay alguna sesion iniciada
if (isset($_SESSION['usuario'])) {
 ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CAMBIAR CONTRASEÑA</title>

  <!-- CSS-->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/form-elements.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Favicon and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
</head>

<body>
  <!-- Top content -->
  <div class="top-content">
    <div class="inner-bg">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 form-box">
            <div class="form-top">
              <div class="form-top-left">
                <p><img src="assets/files/logo.png" alt="logo TSI" title="Logo TSI" width="100" height="75" /></p>
                <h3>Cambiar contraseña</h3>
              </div>
            </div>
            <div class="form-bottom">
              <form role="form" action="cambiarContra.php" method="post" class="login-form">
                <div class="form-group">
                  <label class="sr-only" for="form-username">Nueva contraseña</label>
                  <input type="password" name="form-username" placeholder="Nueva contraseña" class="form-username form-control" id="form-username" required>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="form-password">Repetir nueva contraseña</label>
                  <input type="password" name="form-password" placeholder="Repetir nueva contraseña" class="form-password form-control" id="form-password" required>
                </div>
                <button type="submit" class="btn">Cambiar contraseña</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Javascript -->
  <script src="assets/js/jquery-1.11.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.backstretch.min.js"></script>
</body>

</html>
<?php
}
else {
  //si no hay ninguna sesion iniciada, le volvemos a la pantalla de iniciar sesion
  ?>
    <script type="text/javascript">
      window.location = "index.php";
    </script>
  <?php
}
 ?>
