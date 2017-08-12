<?php
include_once 'logica/funciones.php';
$fun = new funciones();
session_start();
$nom="";
$app="";
$correo="";
$dir="";
$tel="";
$use="";
if(isset($_POST["nombre"])){
  $nom=$_POST["nombre"];
  $app=$_POST["apellidos"];
  $correo=$_POST["email"];
  $dir=$_POST["direccion"];
  $tel=$_POST["telefono"];
  $use=$_POST["user"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CDDMU</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/business-casual.css" rel="stylesheet">

  <!--Business.css-->
  <link href="css/Business.css" rel="stylesheet">
  <link href="css/Style.css" rel="stylesheet">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

  <?php $fun->menu();  ?>


  <!--Inicio Formulario de Registro -->

  <div class="container">
    <div class="box">
      <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">Registrate</h2>
        <hr>
        <h3 class="text-center">Para continuar registrate por favor</h3>
        <form role="form" method="post">
          <div class="row">
            <div class="form-group col-lg-4">
              <label>Nombre(s)</label>
              <input name="nombre" value="<?php echo $nom; ?>" type="text" class="form-control" class="form-control input-sm" placeholder="Nombre(s)" required="required" autofocus="autofocus">
            </div>
            <div class="form-group col-lg-4">
              <label>Apellidos</label>
              <input name="apellidos" value="<?php echo $app; ?>" type="text" class="form-control" class="form-control input-sm" placeholder="Apellidos" required="required" autofocus="autofocus">
            </div>
            <div class="form-group col-lg-4">
              <label>Correo Electrónico @</label>
              <input name="email" value="<?php echo $correo; ?>" type="email" class="form-control" class="form-control input-sm" placeholder="Email @" required="required" autofocus="autofocus">
            </div>
            <div class="form-group col-lg-4">
              <label>Dirección</label>
              <input name="direccion" value="<?php echo $dir; ?>" type="text" class="form-control" class="form-control input-sm" placeholder="Dirección" required="required" autofocus="autofocus">
            </div>
            <div class="form-group col-lg-4">
              <label>Teléfono</label>
              <input name="telefono" value="<?php echo $tel; ?>" type="text" class="form-control" class="form-control input-sm" placeholder="Teléfono" required="required" autofocus="autofocus">
            </div>
            <div class="form-group col-lg-4">
              <label>Nombre de Usuario</label>
              <input name="user" value="<?php echo $use; ?>" type="text" class="form-control" class="form-control input-sm" placeholder="Nombre de usuario" required="required" autofocus="autofocus">
            </div>
            <div class="TITLE form-group col-lg-4">
              <label>Ingresa su Contraseña</label>
              <input name="contraseña" type="password" class="form-control" class="form-control input-sm" placeholder="Contraseña"required="required" autofocus="autofocus">
            </div>
            <div class="form-group col-lg-4">
              <label>Confirme su contraseña</label>
              <input name="confirmar" type="password" class="form-control" class="form-control input-sm" placeholder="Confirmar contraseña" required="required" autofocus="autofocus">
            </div> </DIV>
            <h3 style="text-align: center">DATOS DE SU EMPRESA</h3><hr>
            <div class="row">
            <div class="form-group col-lg-4">
              <label>Nombre de la empresa</label>
              <input name="nombreempresa" type="text" class="form-control" class="form-control input-sm" placeholder="Empresa" required="required" autofocus="autofocus">
            </div>
            <div class="form-group col-lg-4">
              <label>Dirección de la empresa</label>
              <input name="direccionempresa" type="text" class="form-control" class="form-control input-sm" placeholder="Dirección" required="required" autofocus="autofocus">
            </div>
            <div class="form-group col-lg-4">
              <label>Teléfono de la empresa</label>
              <input name="telefonoempresa" type="tel" class="form-control" class="form-control input-sm" placeholder="Teléfono" required="required" autofocus="autofocus">
            </div>
            <div class="form-group col-lg-4">
              <label>Correo Electrónico de la empresa @</label>
              <input name="emailempresa" type="email" class="form-control" class="form-control input-sm" placeholder="Email @" required="required" autofocus="autofocus">
            </div>

            <div class="form-group col-lg-4" >
                <label>Descripción de la empresa</label>
                <input name="descripcionempresa" type="text" class="form-control des" class="form-control input-sm" placeholder="Descripción de la empresa" required="required" autofocus="autofocus">
              </div>

            <div class="form-group col-lg-12">
              <?php $fun->N_afiliado();?>
              <input type="hidden" name="save" value="contact">
              <button  name="agregar" type="Afiliarse" class="btn btn-default col-sm-offset-6 ">Registrarse</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  <!--Final Registro-->
  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/modals.js"></script>

</body>
  <?php $fun->footer();  ?>
</html>
