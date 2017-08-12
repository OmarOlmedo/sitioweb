<?php
include_once 'logica/funciones.php';
$fun = new funciones();
session_start();
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
  <link href="css/Style0.css" rel="stylesheet">



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


  <br>
  <div class="container">
    <div class="box col-xs-12 col-md-4 col-md-offset-4">
      <div class="">
        <div class="login" id="card">
          <div class="front signin_form">
            <h2 style="text-align:center">INICIAR SESIÓN</h2> <hr>
            <form class="login-form">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Username">
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                  </span>
                </div> <br>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="password" class="form-control" placeholder="Type your password">
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-lock"></i>
                  </span>
                </div>
              </div>
              <div class="checkbox">
                <label><input type="checkbox">Recordar mi contraseña</label>
              </div> <hr>

              <div class="form-group sign-btn">
                <input type="submit" class="btn" value="Entrar"> <br><br>
                <p><a href="#" class="forgot">¿No puedes acceder a tu cuenta?</a></p>
                <p><strong>¿Eres nuevo?</strong><br><a href="registrarse.php" id="flip-btn" class="signup signup_link">Crea una cuenta ahora.</a></p>
              </div>
            </form>
          </div>

        </div>  <br>

      </div>
    </div>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.0.18/jquery.flip.js"></script>





  <!-- jQuery -->
  <script src="js/jquery.js"></script>
  <!-- jQuery -->



  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

</body>
<?php $fun->footer();  ?>
</html>
