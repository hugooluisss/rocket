<?php
global $conf;

$conf['socios'] = array(
	'controlador' => 'socios.php',
	'vista' => 'socios/panel.tpl',
	'descripcion' => 'socios',
	'seguridad' => true,
	'js' => array('socio.class.js', 'usuario.class.js'),
	'jsTemplate' => array('socios.js'),
	'perfiles' => array(1),
	'capa' => LAYOUT_DEFECTO);

$conf['listaSocios'] = array(
	'controlador' => 'socios.php',
	'vista' => 'socios/lista.tpl',
	'descripcion' => 'Lista de socios',
	'seguridad' => true,
	'perfiles' => array(1),
	'capa' => LAYOUT_AJAX);
	
$conf['csocios'] = array(
	'controlador' => 'socios.php',
	'descripcion' => 'socios de socios',
	'seguridad' => false,
	'capa' => LAYOUT_JSON);	
?>