<?php
ob_start();
// Las acciones se ejecutan como 
// index.php?r=controlador/accion&param1=...
/*	ini_set('display_errors', 'On');
	// Valor por defecto en PHP
	// Muestra todos los errores menos las notificaciones
	error_reporting(E_ALL ^ E_NOTICE);
	// Muestro todos los errores
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	error_reporting(E_ALL);
	error_reporting(-1);
	// Muestro todos los errores, incluso los estrictos
	error_reporting(E_ALL | E_STRICT);
	// No muestra ningún error
	error_reporting(0);
	// También se puede usar la función ini_set
	ini_set('error_reporting', E_ALL);*/
session_start ();

if(isset($_GET['r'])) 
    $r=$_GET['r'];  
else{
  $r='login/loger';
}
    
list($controllername,$action)=explode('/',$r);

$controllerclass=$controllername.'Controller';

if(file_exists("controllers/$controllerclass.php")) {
    require "controllers/$controllerclass.php";

    $controller=new $controllerclass;

} else
    die ("Error al crear controlador ".$controllerclass);


$metodo='action'.$action;
if(!method_exists($controller,$metodo))
    die("No existe esa acción");
else
    $controller->$metodo();

ob_end_flush();
?>