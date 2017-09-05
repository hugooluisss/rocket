<?php
global $objModulo;

switch($objModulo->getId()){
	default:
		switch($objModulo->getAction()){
			case 'add':
				global $userSesion;
				$obj = new TSocio();
				
				$obj->setId($_POST['id']);
				$obj->setTipo(3);
				$obj->setNombre($_POST['nombre']);
				$obj->setApellidos($_POST['apellidos']);
				$obj->setCorreo($_POST['correo']);
				if ($_POST['pass'] <> '')
					$obj->setPass($_POST['pass']);
				$obj->setMunicipio($_POST['municipio']);
				$obj->setEntidadFederativa($_POST['entidadfederativa']);
				
				$band = $obj->guardar();
				
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TSocio($_POST['id']);
				
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
			case 'validarEmail':
				$db = TBase::conectaDB();
				$rs = $db->query("select idUsuario from usuario where upper(correo) = upper('".$_POST['txtUsuario']."')");
				echo $rs->num_rows == 0?"true":"false";
			break;
		}
	break;
}
?>