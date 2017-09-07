<?php
global $conf;

$conf['misbeneficios'] = array(
	#'controlador' => 'movimientos.php',
	'vista' => 'front-end/misBeneficios.tpl',
	'descripcion' => 'Mis beneficios',
	'js' => array('socio.class.js', 'usuario.class.js'),
	'jsTemplate' => array('sociosHome.js', 'negociosHome.js'),
	'seguridad' => false,
	'capa' => LAYOUT_ROCKET);
?>