<?php
global $conf;

$conf['negocios'] = array(
	'controlador' => 'negocios.php',
	'vista' => 'negocios/panel.tpl',
	'descripcion' => 'Administración de negocios',
	'seguridad' => true,
	'js' => array('negocio.class.js', 'usuario.class.js'),
	'jsTemplate' => array('negocios.js', 'comisiones.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaNegocios'] = array(
	'controlador' => 'negocios.php',
	'vista' => 'negocios/lista.tpl',
	'descripcion' => 'Lista de negocios',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cnegocios'] = array(
	'controlador' => 'negocios.php',
	'descripcion' => 'Controlador de negocios',
	'seguridad' => false,
	'capa' => LAYOUT_JSON);
?>