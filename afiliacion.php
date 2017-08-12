<?php
include_once 'logica/funciones.php';
$fun = new funciones();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/style.css">
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="Estilo.css">
        <title>CDMU</title>
    </head>
<body>
<?php $fun->menu();?>

        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <h1 class="text-center">Requisitos para la afiliación</h1>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Ingresa los siguientes datos</label>
                        <div class="form-group"> <input type="text" class="form-control" placeholder="Ingresa tu Nombre" aria-describedby="basic-addon2" class="col-md-4"> </div>
                        <div class="form-group"> <input type="text" class="form-control" placeholder="Ingresa tu Apellido" aria-describedby="basic-addon2" class="col-md-4"> </div>
                        <div class="form-group"> <input type="text" class="form-control" placeholder="Ingresa tu Correo" aria-describedby="basic-addon2" class="col-md-4"> </div>
                        <div class="form-group"> <input type="text" class="form-control" placeholder="Ingresa tu Numero" aria-describedby="basic-addon2" class="col-md-4"> </div>
                        <div class="form-group"> <input type="text" class="form-control" placeholder="Ingresa tu Contraseña" aria-describedby="basic-addon2" class="col-md-4"> </div>
                    </div>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Acepto términos de privacidad
                    </label>
                </div>

                <div class="col-md-4">
                    <br>
                    <div class="panel panel-default">

                        <div class="panel-body">
                            Texto Informativo
                        </div>
                        <div class="panel-footer">.............................</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <br>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            Texto Infotmativo
                        </div>
                        <div class="panel-footer">.......................................</div>

                    </div>

                </div>

            </div>
            <div class="container col-xs-offset-6"><button class="btn btn-primary btn-lg ">Enviar</button></div>
        </div>
        <hr>
        <?php $fun->carfo();?>
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
        <script src="js/modals.js"></script>
    </body>
    <?php $fun->footer(); ?>
</html>
