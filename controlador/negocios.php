<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaNegocios':
		$db = TBase::conectaDB();
		#global $sesion;
		#$usuario = new TUsuario($sesion['usuario']);
		$sql = "select *, if(setcomision > now(), 0, 1) as canSetComision from usuario a join negocio b using(idUsuario) where a.visible = true and idTipo = 2";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			//$obj = new TNegocio($row['idUsuario']);
			$row['pass'] = '';
			$row['json'] = json_encode($row);
			unset($obj);
			array_push($datos, $row);
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'listaNegociosAutocomplete':
		$db = TBase::conectaDB();
		$sql = "select * from usuario a join negocio b using(idUsuario) where a.visible = true and idTipo = 2 and (razonsocial like '%".$_GET['term']."%' or giro like '%".$_GET['term']."%')";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$aux = array();
			
			$aux["label"] = $row['razonsocial'].', '.$row['giro'];
			$aux['identificador'] = $row['idUsuario'];
			$aux['correo'] = $row['correo'];
			
			array_push($datos, $aux);
		}
		
		$smarty->assign("json", $datos);
	break;
	case 'datosNegocio':
		global $sesion;
		$usuario = new TUsuario($sesion['usuario']);
		
		$smarty->assign("negocio", new TNegocio($sesion['usuario']));
	break;
	
	case 'cnegocios':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TNegocio();
				$obj->setId($_POST['id']);
				$obj->setTipo(2);
				$obj->setNombre($_POST['nombre']);
				$obj->setApp($_POST['app']);
				$obj->setApm($_POST['apm']);
				$obj->setCorreo($_POST['correo']);
				$obj->setRazonSocial($_POST['razonsocial']);
				$obj->setGiro($_POST['giro']);
				$obj->setRFC($_POST['rfc']);
				$obj->setCalle($_POST['calle']);
				$obj->setNumero($_POST['numero']);
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
				$result = $obj->setComision($_POST['comision']);
				
				$smarty->assign("json", array("band" => $result));
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
				$band = true;
				$obj = new TMovimiento();
				
				$obj->tipo = new TTipoMovimiento(4);
				$obj->negocio = new TNegocio($_POST['id']);
				$obj->setEfectivo($_POST['monto']);
				$band = $obj->guardar();
				
				if($band)
					$obj->negocio->addSaldo($_POST['monto'], 4, $obj->getId());
				
				$smarty->assign("json", array("band" => $band, "saldo" => sprintf("%0.2f", $obj->negocio->getSaldo())));
			break; 
			case 'uploadLogotipo':
				global $userSesion;
				$result = false;
				if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
					$carpeta = "repositorio/negocios/";
					if (!file_exists($carpeta))
						mkdir($carpeta, 0755);
						
					$archivo = $userSesion->getId().".jpg";
					if(move_uploaded_file($_FILES['upl']['tmp_name'], $carpeta.$archivo)){
						chmod($carpeta.$_FILES['upl']['name'], 0755);
						$result = true;
					}
				}
				
				$smarty->assign("json", array("band" => $result));
			break;
		}
	break;
}
?>