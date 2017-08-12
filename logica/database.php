<?php

class database {

  private $pdo;//variable para iniciar el pdo
  var $HOST = "localhost";//nombre del host que se ocupara
  var $BDNAME = "id2249975_pagina_web";//nombre de la base de datos
  var $USUARIO = "id2249975_cddmu";//nombre del usuario
  var $PASSWORD = "andres18";//la contraseña para acceder a la base

  public function __construct() {
    try {
      //se conecta a la base
      $this->pdo = new PDO('mysql:host=' . $this->HOST . ';dbname=' . $this->BDNAME, $this->USUARIO, $this->PASSWORD);//prepara la conexión
      $this->pdo->exec("set character set utf8");
    } catch (PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();//mensaje por si surge un error
    }
  }
//cierra la conexion
  function CerrarConexion() {
    $this->pdo = null;
  }

  function servicio(){
    //prepara la consulta de servicios
    $sql = $this->pdo->prepare("select * from servicios");
    if ($sql->execute(array(1))) {
      //retorna los datos obtenidos de la base
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

  function bolsa(){
    //prepara la consulta de bolsa de trabajo
    $sql = $this->pdo->prepare("select * from bolsa_trabajo");
    if ($sql->execute(array(1))) {
      //retorna los datos obtenidos de la base
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

  function cursos(){
    //prepara la consulta de cursos
    $sql = $this->pdo->prepare("select * from cursos");
    if ($sql->execute(array(1))) {
      //retorna los datos obtenidos de la base
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

  function N_afiliado($nombre, $apellidos, $email, $direccion, $telefono, $user, $contraseña){
    //inserta una nueva afiliacion
    $sql = $this->pdo->prepare("INSERT INTO afiliados(`Nombre`, `Apellidos`, `Email`, `Direccion`, `Telefono`, `Nombre_usuario`, `Contraseña`) VALUES ('{$_POST['nombre']}','{$_POST['apellidos']}','{$_POST['email']}','''{$_POST['direccion']}
      ','{$_POST['telefono']}','{$_POST['user']}','{$_POST['contraseña']}')");
    $sql->execute(array($nombre, $apellidos, $email, $direccion, $telefono, $user, $contraseña));
  }

  function afilidao_id($user, $contraseña){
    $sql = $this->pdo->prepare("SELECT * FROM `afiliados` WHERE `Nombre_usuario` = ? AND `passwors`= ?");
    if ($sql->execute(array($user, $contraseña))) {
      //retorna los datos obtenidos de la base
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
  }

  function N_maquila($id,$nombre_empresa,$direccion_empresa,$telefono_empresa,$email_empresa,$descripcion_empresa){
    //inserta una nueva maquila
    $sql = $this->pdo->prepare("INSERT INTO `maquila`( `Id_afiliado`, `Nombre_maqui`, `Direccion`, `Telefono`, `Email`, `Descripcion`) VALUES ('{$id}','{$_POST['nombreempresa']}','{$_POST['direccionempresa']}','{$_POST['telefonoempresa']}
      ','{$_POST['emailempresa']}','{$_POST['descripcionempresa']}')");
    $sql->execute(array($id,$nombre_empresa,$direccion_empresa,$telefono_empresa,$email_empresa,$descripcion_empresa));
  }

  function N_aspirante($id, $nombre, $apellidos, $telefono, $direccion, $email){
    //inserta una nuevo aspirante
    $sql = $this->pdo->prepare("INSERT INTO aspirantes(`Id_curs`,`Nombre_aspi`, `Apellidos`, `Telefono`, `Direccion`, `Email`) VALUES ('{$id}','{$_POST['nombre']}','{$_POST['apellidos']}','{$_POST['telefono']}
      ','{$_POST['direccion']}','{$_POST['email']}')");
    $sql->execute(array($id, $nombre, $apellidos, $telefono, $direccion, $email));

  }

  function N_bolsa($id, $nombre, $contenido, $telefono,$direccion,$fecha_limite){
    //inserta una nueva afiliacion
    $sql = $this->pdo->prepare("INSERT INTO bolsa_trabajo(`Id_afiliado`,`Nombre_vacante`, `Contenido`, `Telefono`, `Direccion`, `Fecha_limite`) VALUES ('{$id}','{$_POST['vacante']}','{$_POST['contenido']}','{$_POST['telefono']}
      ','{$_POST['direccion']}','{$_POST['fecha']}')");
    $sql->execute(array($id, $nombre,$contenido, $telefono,$direccion,$fecha_limite));
  }


  function Empleado ($id, $nombre, $telefono, $email , $mensaje){
    //inserta una nueva afiliacion
    $sql = $this->pdo->prepare("INSERT INTO `bolsa_formulario`(`Id_bolsa`, `Nombre`, `Telefono`, `Correo`, `Mensaje`) VALUES ('{$_POST['Id_bolsa']}','{$_POST['nombre']}','{$_POST['telefono']}','{$_POST['email']}
      ','{$_POST['comentario']}')");
    $sql->execute(array($id, $nombre, $telefono, $email , $mensaje));
  }

 function maquila($id){
   $sql = $this->pdo->prepare("select * from maquila where Id_afiliado = ?");
   if ($sql->execute(array($id))) {
     //retorna los datos obtenidos de la base
     return $sql->fetchAll(PDO::FETCH_ASSOC);
   }
 }

}
