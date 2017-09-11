<?php
global $conf;

$conf['movimientos'] = array(
	'controlador' => 'movimientos.php',
	'vista' => 'movimientos/panel.tpl',
	'descripcion' => 'Administración de movimientos',
	'seguridad' => true,
	'js' => array('movimiento.class.js'),
	'jsTemplate' => array('movimientos.js'),
	'perfiles' => array(2),
	'capa' => LAYOUT_DEFECTO);

$conf['listaMovimientos'] = array(
	'controlador' => 'movimientos.php',
	'vista' => 'movimientos/lista.tpl',
	'descripcion' => 'Lista de movimientos',
	'seguridad' => true,
	'perfiles' => array(2),
	'capa' => LAYOUT_AJAX);
	
$conf['cmovimientos'] = array(
	'controlador' => 'movimientos.php',
	'descripcion' => 'Controlador de movimientos',
	'seguridad' => true,
	'perfiles' => array(2),
	'capa' => LAYOUT_JSON);
?>