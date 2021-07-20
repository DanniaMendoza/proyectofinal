<?php
	include '../controlador/conexion.php';

	$obj = new Conectar();
	$accion = $_REQUEST['accion'];

	if ($accion === "agregar") {
	    $obj->agregarTipo($_REQUEST['codtipo'], $_REQUEST['nomtipo']);
		} 	
		
		else if ($accion === "eliminar") {
	    $obj->eliminarTipo($_REQUEST['codtipo']);
		}
		
			else if ($accion === "modificar") {
	    	$obj->actualizarTipo($_REQUEST['codtipo'],$_REQUEST['nomtipo']);      
			}

	header("location:../tipo/listar_tipo.php");
   	header("location:../paginas/productos.php");
	
?>
