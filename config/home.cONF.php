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
	
$conf['terminoscondiciones'] = array(
	'vista' => 'front-end/terminosCondiciones.tpl',
	'descripcion' => 'Terminos y condiciones',
	'js' => array('socio.class.js', 'usuario.class.js'),
	'jsTemplate' => array('sociosHome.js', 'negociosHome.js'),
	'seguridad' => false,
	'capa' => LAYOUT_ROCKET);
	
$conf['avisoprivacidad'] = array(
	'vista' => 'front-end/avisoprivacidad.tpl',
	'descripcion' => 'Aviso de privacidad',
	'js' => array('socio.class.js', 'usuario.class.js'),
	'jsTemplate' => array('sociosHome.js', 'negociosHome.js'),
	'seguridad' => false,
	'capa' => LAYOUT_ROCKET);
	
$conf['contactanos'] = array(
	'vista' => 'front-end/contactanos.tpl',
	'descripcion' => 'Plantilla de contacto',
	'js' => array('socio.class.js', 'usuario.class.js'),
	'jsTemplate' => array('sociosHome.js', 'negociosHome.js', 'contacto.js'),
	'seguridad' => false,
	'capa' => LAYOUT_ROCKET);
	
$conf['cfrontend'] = array(
	'controlador' => 'front-end.php',
	'descripcion' => 'Controlador del front-end',
	'seguridad' => false,
	'capa' => LAYOUT_JSON);
	
$conf['negocio'] = array(
	'controlador' => "front-end.php",
	'vista' => 'front-end/detalleEmpresa.tpl',
	'descripcion' => 'Detalle de la empresa',
	'js' => array('socio.class.js', 'usuario.class.js'),
	'jsTemplate' => array('sociosHome.js', 'negociosHome.js', "negocioSolo.js"),
	'seguridad' => false,
	'capa' => LAYOUT_ROCKET);
?>