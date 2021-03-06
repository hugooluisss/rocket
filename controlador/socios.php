<?php
global $objModulo;

switch($objModulo->getId()){
	case 'listaSocios':
		$db = TBase::conectaDB();
		global $sesion;
		$usuario = new TUsuario($sesion['usuario']);
		$sql = "select * from usuario a join socio b using(idUsuario) where a.visible = true and idTipo = 3";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['pass'] = '';
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'sociopanel':
		$db = TBase::conectaDB();
		global $pageSesion;
		global $sesion;
		$socio = new TSocio($sesion['usuario']);
		
		$sql = "select a.*, b.nombre as tipo, b.color from sociomovimiento aa join movimiento a using(idMovimiento) join tipomovimiento b using(idTipoMovimiento) where idUsuario = ".$pageSesion->getId()." order by registro desc";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$obj = new TNegocio($row['idNegocio']);
			$row['negocio'] = $obj->getRazonSocial();
			unset($obj);
			
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("lista", $datos);
		$smarty->assign("socio", $socio);
	break;
	case 'csocios':
		switch($objModulo->getAction()){
			case 'add':
				global $userSesion;
				$obj = new TSocio();
				
				$obj->setId($_POST['id']);
				$obj->setTipo(3);
				$obj->setNombre($_POST['nombre']);
				$obj->setApp($_POST['app']);
				$obj->setApm($_POST['apm']);
				$obj->setCorreo($_POST['correo']);
				if ($_POST['pass'] <> '')
					$obj->setPass($_POST['pass']);
				$obj->setMunicipio($_POST['municipio']);
				$obj->setEntidadFederativa($_POST['entidadfederativa']);
				$obj->setWhatsapp($_POST['whatsapp']);
				
				$band = $obj->guardar();
				
				if ($band and $_POST['id'] == ''){
					$datos = array();
					$datos['cliente.nombre'] = $obj->getNombre().' '.$obj->getApp()." ".$obj->getApm();
					$datos['sitio.url'] = $ini["sistema"]["url"];
					$datos['cliente.pass'] = $obj->getPass();
					$datos['cliente.email'] = $_POST['correo'];
					$datos['cliente.idUsuario'] = $obj->getId();
					
					$email = new TMail2();
					$email->setTema("Bienvenido a Rocket Card");
					$email->addDestino($obj->getCorreo(), utf8_decode($obj->getNombre().' '.$obj->getApp()." ".$obj->getApm()));
					//$email->addDestino("hugooluisss@gmail.com", utf8_decode($obj->getNombre().' '.$obj->getApp()." ".$obj->getApm()));
					$email->setBodyHTML(utf8_decode($email->construyeMail(file_get_contents("repositorio/mail/registroSocio.html"), $datos)));
					$email->send();
					//echo json_encode(array("band" => $email->send()));
				}
				
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TSocio($_POST['id']);
				
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
			case 'getData':
				$db = TBase::conectaDB();
				$rs = $db->query("select * from usuario a join socio b using(idUsuario) where (upper(correo) = upper('".$_POST['socio']."') or idUsuario = '".ltrim($_POST['socio'], '0')."') and a.visible = 1");
				
				$smarty->assign("json", $rs->num_rows > 0?$rs->fetch_assoc():array("idUsuario" => ''));
			break;
			case 'login':
				$db = TBase::conectaDB();
				$rs = $db->query("select idUsuario, pass from usuario where (upper(correo) = upper('".$_POST['usuario']."') or idUsuario = '".ltrim($_POST['usuario'], '0')."') and visible = true and idTipo in (3)");
				$result = array('band' => false, 'mensaje' => 'Error al consultar los datos');
				
				$row = $rs->fetch_assoc();
				
				if($rs->num_rows == 0)
					$result = array('band' => false, 'mensaje' => 'El usuario no existe');
				elseif(strtoupper($row['pass']) <> strtoupper($_POST['pass']))
					$result = array('band' => false, 'mensaje' => 'Contrase�a inv�lida');
				else{
					$obj = new TUsuario($row['idUsuario']);
					if ($obj->getId() == '')
						$result = array('band' => false, 'mensaje' => 'Acceso denegado', 'tipo' => $obj->getIdTipo());
					else
						$result = array('band' => true);
				}
				
				if($result['band']){
					$obj = new TUsuario($row['idUsuario']);
					$sesion['usuario'] = $obj->getId();
					$sesion['perfil'] = $obj->getIdTipo();
					
					$_SESSION[SISTEMA] = $sesion;
				}
				
				$result['datos'] = $sesion;
				echo json_encode($result);
			break;
			/*
			case 'validarEmail':
				$db = TBase::conectaDB();
				$rs = $db->query("select idUsuario from usuario where upper(correo) = upper('".$_POST['txtUsuario']."')");
				echo $rs->num_rows == 0?"true":"false";
			break;
			*/
		}
	break;
}
?>