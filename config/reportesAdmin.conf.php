<?php
$conf['reporteRegalias'] = array(
	'controlador' => 'reportesAdmin.php',
	'vista' => 'reportes/admin/regalias.tpl',
	'descripcion' => 'Reporte de regalias',
	'seguridad' => true,
	#'js' => array('negocio.class.js', 'usuario.class.js'),
	'jsTemplate' => array('reporteRegalias.js'),
	'perfiles' => array(1),
	'capa' => LAYOUT_DEFECTO);
	
$conf['reporteListaRegalias'] = array(
	'controlador' => 'reportesAdmin.php',
	'vista' => 'reportes/admin/listaRegalias.tpl',
	'descripcion' => 'Lista de regalias',
	'seguridad' => true,
	'perfiles' => array(1),
	'capa' => LAYOUT_AJAX);
?>