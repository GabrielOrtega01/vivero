<?php
//requiere una sola vez de la carpeta control el archivo
//controlador.php
require_once "control/controler.php";

//debe estar requerido la carpeta modelo
//el archivo model para que en el controlador se
//conecte con modelo
require_once "modelo/model.php";
//crea una instancia de la clase Mvcontroller
$mvc= new MvcController;
//este mvc me trae la funcion plantilla
$mvc-> plantilla();
?>