<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaNegocios':
		$db = TBase::conectaDB();
		#global $sesion;
		#$usuario = new TUsuario($sesion['usuario']);
		$sql = "select * from usuario a join negocio b using(idUsuario) where a.visible = true and idTipo = 2";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$obj = new TNegocio($row['idUsuario']);
			$row['comision'] = $obj->getComision();
			$row['pass'] = '';
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'cnegocios':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TNegocio();
				$obj->setId($_POST['id']);
				$obj->setTipo(2);
				$obj->setNombre($_POST['nombre']);
				$obj->setApellidos($_POST['apellidos']);
				$obj->setCorreo($_POST['correo']);
				$obj->setRazonSocial($_POST['razonsocial']);
				$obj->setGiro($_POST['giro']);
				$obj->setRFC($_POST['rfc']);
				$obj->setCalle($_POST['calle']);
				$obj->setColonia($_POST['colonia']);
				$obj->setCodigoPostal($_POST['codigopostal']);
				$obj->setLocalidad($_POST['localidad']);
				$obj->setMunicipio($_POST['municipio']);
				$obj->setEntidadFederativa($_POST['entidadfederativa']);
				$obj->setTelefono($_POST['telefono']);
				
				if ($_POST['pass'] <> '')
					$obj->setPass($_POST['pass']);
					
				$band = $obj->guardar();
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TUsuario($_POST['usuario']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
			case 'addComision':
				$obj = new TNegocio($_POST['id']);
				$result = $obj->addComision($_POST['comision']);
				
				$smarty->assign("json", array("band" => $result <> '', "fecha" => $result));
			break;
		}
	break;
}
?>