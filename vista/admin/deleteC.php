<?php 
session_start();
 include_once('../../modelo/conexion1.php');
if (isset($_GET['categoria_id'])) {
	$database = new ConectarDB();
	$db = $database->open();
	try {
		$sql = "DELETE FROM categorias WHERE categoria_id = '".$_GET['categoria_id']." ' ";

		$_SESSION['message']= ($db->exec($sql)) ? 'Categoria Eliminada Correctamente' : 'Algo Salio mal, No se pudo eliminar la categoria';
	    
	} catch (PDOException $e) {
		$_SESSION['message']= $e->getMessage();
	}
	$database->close();
}else{
	$_SESSION['message']= 'Seleccione una categoria para eliminar';

}
header('location: categorias.php');

?>