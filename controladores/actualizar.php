<?php

require_once(__DIR__ . "/../libs/Database.php");
require_once(__DIR__ . "/../libs/modelo.php");
include_once("../clases/Aprendiz.php");

$database = new Database();
$conection = $database->getConection();
$aprendiz = new Aprendiz($conection);




$id = $_REQUEST['id'];

$nombre = isset($_POST['firts_name']) ?
    ($_POST['firts_name'] != "" ? $_POST['firts_name'] : false) :
    false;
$apellido = isset($_POST['last_name']) ?
    ($_POST['last_name'] != "" ? $_POST['last_name'] : false) :
    false;
$fecha_Nacimiento = isset($_POST['birthdate']) ?
    ($_POST['birthdate'] != "" ? $_POST['birthdate'] : false) :
    false;
$correo = isset($_POST['email']) ?
    ($_POST['email'] != "" ? $_POST['email'] : false) :
    false;
$telefono = isset($_POST['phone']) ?
    ($_POST['phone'] != "" ? $_POST['phone'] : false) :
    false;

$identificacion = isset($_POST['dni']) ?
    ($_POST['dni'] != "" ? $_POST['dni'] : false) :
    false;

$cuenta = isset($_POST['user_account']) ?
    ($_POST['user_account'] != "" ? $_POST['user_account'] : false) :
    false;

$promedio = isset($_POST['average']) ?
    ($_POST['average'] != "" ? $_POST['average'] : false) :
    false;


$aprendiz->update($id, [
    'firts_name' => $nombre,
    'last_name' => $apellido,
    'birthdate' => $fecha_Nacimiento,
    'email' => $correo,
    'phone' => $telefono,
    'dni' => $identificacion,
    'user_account' => $cuenta,
    'average' => $promedio
] );

header('location: listar.php');