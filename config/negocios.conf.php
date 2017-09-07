<?php
global $conf;

$conf['negocios'] = array(
	'controlador' => 'negocios.php',
	'vista' => 'negocios/panel.tpl',
	'descripcion' => 'Administración de negocios',
	'seguridad' => true,
	'js' => array('negocio.class.js', 'usuario.class.js'),
	'jsTemplate' => array('negocios.js'),
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
	
$conf['datosNegocio'] = array(
	'controlador' => 'negocios.php',
	'vista' => 'negocios/updateDatos.tpl',
	'descripcion' => 'Permite actualizar los datos del negocio',
	'seguridad' => true,
	'js' => array('negocio.class.js', 'usuario.class.js'),
	'jsTemplate' => array('datosNegocio.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['galeria'] = array(
	'controlador' => 'negocios.php',
	'vista' => 'negocios/galeria.tpl',
	'descripcion' => 'Actualización de la lista de imágenes a mostrar',
	'seguridad' => true,
	'js' => array('negocio.class.js'),
	'jsTemplate' => array('galeria.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['getListaImagenesGaleria'] = array(
	'controlador' => 'negocios.php',
	'vista' => 'negocios/listaImagenes.tpl',
	'descripcion' => 'Lista de imagenes que corresponden a la galería del negocio',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
?>