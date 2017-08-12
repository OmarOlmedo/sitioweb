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
  <link href="css/Style.css" rel="stylesheet">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
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


  <div class="container">

    <div class="row">
      <div class="box">
        <div class="col-lg-12 text-center">
          <div id="carousel-example-generic" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators hidden-xs">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img class="img-responsive img-full" src="img/sli2.jpg" alt="">
              </div>
              <div class="item">
                <img class="img-responsive img-full" src="img/sli1.jpg" alt="">
              </div>
              <div class="item">
                <img class="img-responsive img-full" src="img/sli3.jpg" alt="">
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="icon-next"></span>
            </a>
          </div>
          <h2 class="brand-before">
            <small>Bienvenidos a </small>
          </h2>
          <h1 class="brand-name">C D M U</h1>

        </h2>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="box">
      <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">
          <a href=""><strong>SERVICIOS</strong></a>
        </h2>
        <hr>
        <img class="img-responsive img-border img-left" src="img/serv.jpg" alt="">
        <hr class="visible-xs">
          <p>Los servicios se basan en el contexto operativo de la solicitud y las políticas establecidas para satisfacer las necesidades de los clientes .</p>
        <p>Se ofrecen servicios a los usuarios con el fin de que puedan conocer o encontrar las posibilidades de trabajo, saber  los beneficios que da la empresa hacia ellos.  </p>
         <p>-Capacitaciones <br> -Cursos <br> -Oportunidades de trabajo</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="box">
      <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">
          <a href=""><strong>CURSOS</strong></a>
        </h2>
        <hr>
        <img class="img-responsive img-border img-left" src="img/cur.jpg" alt="">
        <hr class="visible-xs">
        <p>Los cursos o desarrollo de personal es una actividad desarrollada en la empresa de acuerdo a sus necesidades y habilidades del personal.</p>
        <p>Damos cursos enfocados a la industria del vestido, para así tener personal más actualizado en la empresa.</p>
        <p>Los cursos no solo son un proceso, es un aprendizaje para la persona que lo tome. Son herramientas que servirán para su desempeño en la empresa. </p>


      </div>
    </div>
  </div>
  <div class="row">
    <div class="box">
      <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">
          <a href=""><strong>OPORTUNIDADES DE TRABAJO</strong></a>
        </h2>
        <hr>
        <img class="img-responsive img-border img-left" src="img/oportunidad.jpg" alt="">
        <hr class="visible-xs">
        <p>Las oportunidades de trabajo van enfocadas a las personas que quieran participar dentro de la empresa por distintos periodos de tiempo. </p>
        <p>Los aspirantes tendrán entrevistas de trabajo, pruebas para poder pasar a formar parte del equipo de trabajo.</p>

      </div>
    </div>
  </div>

  <div class="row">
    <div class="box">
      <div class="col-lg-12 text-center">
        <div id="carousel-example-generic" class="carousel slide">
          <!-- Indicators -->
          <ol class="carousel-indicators hidden-xs">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img class="img-responsive img-full" src="img/slid1.jpg" alt="">
            </div>
            <div class="item">
              <img class="img-responsive img-full" src="img/slid2.jpg" alt="">
            </div>
            <div class="item">
              <img class="img-responsive img-full" src="img/slid3.jpg" alt="">
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="icon-prev"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="icon-next"></span>
          </a>
        </div>

      </div>
    </div>

  </div>

</div>
<!-- /.container -->
</body>
<!--footer start from here-->


<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/modals.js"></script>




<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
  interval: 5000 //changes the speed
})
</script>
  <?php $fun->footer();  ?>


</html>
