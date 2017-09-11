<?php
global $conf;

$conf['misbeneficios'] = array(
	'vista' => 'front-end/misBeneficios.tpl',
	'descripcion' => 'Mis beneficios',
	'js' => array('socio.class.js', 'usuario.class.js'),
	'jsTemplate' => array('sociosHome.js', 'negociosHome.js'),
	'seguridad' => false,
	'capa' => LAYOUT_ROCKET);
	
$conf['marcasafiliadas'] = array(
	'controlador' => 'negocios.php',
	'vista' => 'front-end/marcasAfiliadas.tpl',
	'descripcion' => 'Fotografías de las empresas',
	'js' => array('socio.class.js', 'usuario.class.js'),
	'jsTemplate' => array('sociosHome.js', 'negociosHome.js', 'negociosAfiliados.js'),
	'seguridad' => false,
	'capa' => LAYOUT_ROCKET);
?>