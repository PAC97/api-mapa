<?php
header("Access-Control-Allow-Origin: *");
require_once "controladores/rutasController.php";
require_once "controladores/municipiosController.php";
require_once "controladores/lugaresController.php";
require_once "modelos/municipios.php";
require_once "modelos/lugares.php";

$rutas = new ControladorRutas();
$rutas -> index();