<?php
include_once 'logica/funciones.php';
$fun = new funciones();
session_start();
$fun->comprobar();
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
    <link href="css/Style.css" rel="stylesheet">
    <link href="css/diseño.css" rel="stylesheet">

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
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php $fun->menu();  ?>
            <!-- /.navbar-collapse -->
<div class="container">
<div class="box">
<hr>
<h2 class="intro-text text-center" >Datos personales</h2>
<hr>
<div class="col-md-12">
  <img src="img/perfil/user.png" class="profile">
  <img src="img/perfil/empresa.png" class="empresa">
</div>
<div class="col-md-2 col-md-offset-1">
    <div >
      <h4>Nombre(s):</h4>
    </div><br>
    <div >
      <h4>Email@:</h4>
    </div><br>
    <div >
      <h4>Telefono:</h4>
    </div><br>
    <div >
      <h4 >Nombre de usuario:</h4>
    </div><br>
    <div >
      <h4>Contraseña:</h4>
    </div>
  </div>
<div class="col-md-2 ">
  <?php echo '
  <div style="color:black; ">
    <div ><h4>
      '.$_SESSION['usuario'].'
    </h4></div><br>
    <div><h4>
      '.$_SESSION['email'].'
    </h4></div><br>
    <div ><h4>
      '.$_SESSION['telefono'].'
    </h4></div><br>
    <div ><h4>
      '.$_SESSION['alias'].'
    </h4></div><br><br>
    <div><h4>
      '.$_SESSION['contraseña'].'
      </h4>
    </div>
  </div>'; ?>
</div>

<div class="col-md-2 col-md-offset-1">
      <div >
        <h4>Nombre de la maquila:</h4>
      </div><br>
      <div>
        <h4 >Dirección de la maquila:</h4>
      </div><br>
      <div>
        <h4>Email@:</h4>
      </div><br>
      <div>
        <h4>Telefono:</h4>
      </div><br>
      <div>
        <h4>Descripción:</h4>
      </div>
</div>
<div class="col-md-2 ">
  <?php $fun->maqula(); ?>
</div>
</div>
</div>


    <!-- /.container -->

        <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modals.js"></script>

</body>
<?php $fun->footer();  ?>
</html>
