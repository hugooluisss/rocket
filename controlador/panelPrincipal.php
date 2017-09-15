<?php
global $objModulo;

$db = TBase::conectaDB();
$rs = $db->query("select * from negocio a join usuario b using(idUsuario) where visible = 1 limit 10;");
$directorio = "repositorio/negocios/";
$archivosSlider = array();
while($row = $rs->fetch_assoc()){
	$archivo = $directorio.$row['idUsuario'].".jpg";
	if (file_exists($archivo))
		array_push($archivosSlider, $archivo);
}

$smarty->assign("archivosSlider", $archivosSlider);

switch($objModulo->getId()){
	default:
		if ($userSesion->getPerfil() == 3)
		header('Location: sociopanel');
	break;
}
?>