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
	case 'datosNegocio':
		global $sesion;
		$usuario = new TUsuario($sesion['usuario']);
		
		$smarty->assign("negocio", new TNegocio($sesion['usuario']));
	break;
	case 'getListaImagenesGaleria':
		global $userSesion;
		$archivos = array();
		$ruta = "repositorio/galeria/".$userSesion->getId()."/";
		$directorio = scandir($ruta);
						
		foreach($directorio as $file){
			
			if (!in_array($file, array("..", ".")))
				array_push($archivos, $ruta.$file);
		}
		
		$smarty->assign("imagenes", $archivos);
	break;
	case 'marcasafiliadas':
		$db = TBase::conectaDB();
		$sql = "select * from negocio a join usuario b using(idUsuario) where visible = true";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$ruta = "repositorio/galeria/".$row['idUsuario']."/";
			$directorio = scandir($ruta);
			$row['imagenes'] = array();
			
			foreach($directorio as $file){
				if (!in_array($file, array("..", ".")))
					array_push($row['imagenes'], $ruta.$file);
			}
			
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("negocios", $datos);
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
				if($_POST['plus'] <> '')
					$obj->setPlus($_POST['plus']);
				
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
			case 'uploadGaleria':
				global $userSesion;
				$result = false;
				if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
					$carpeta = "repositorio/galeria/".$userSesion->getId()."/";
					if (!file_exists($carpeta))
						mkdir($carpeta, 0755);
					
					$archivo = date("YmdHis").".".substr($carpeta.$_FILES['upl']['name'], -3);
					if(move_uploaded_file($_FILES['upl']['tmp_name'], $carpeta.$archivo)){
						chmod($carpeta.$_FILES['upl']['name'], 0755);
						$result = true;
					}
				}
				
				$smarty->assign("json", array("band" => $result));
			break;
			case 'eliminarImagen':
				$carpeta = "repositorio/galeria/".$userSesion->getId()."/";
				unlink($_POST["ruta"]);
				
				$smarty->assign("json", array("band" => true));
			break;
			case 'cobrarRegalias':
				$obj = new TNegocio($_POST['id']);
				$result = $obj->addSaldo($_POST['monto'], 4);
				
				$smarty->assign("json", array("band" => $result, "saldo" => sprintf("%0.2f", $obj->getSaldo())));
			break; 
		}
	break;
}
?>