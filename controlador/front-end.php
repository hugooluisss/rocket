<?php
global $objModulo;

switch($objModulo->getId()){
	case 'negocio':
		$empresa = new TNegocio($_GET['id']);
		
		$smarty->assign("negocio", $empresa);
		
		$archivos = array();
		$ruta = "repositorio/galeria/".$empresa->getId()."/";
		$directorio = scandir($ruta);
						
		foreach($directorio as $file){
			
			if (!in_array($file, array("..", ".")))
				array_push($archivos, $ruta.$file);
		}
		
		$smarty->assign("imagenes", $archivos);
	break;
	default:
		switch($objModulo->getAction()){
			case 'contacto':
				global $ini;
				$datos = array();
				$datos['contacto.nombre'] = $_POST['nombre'];
				$datos['contacto.correo'] = $_POST['correo'];
				$datos['contacto.asunto'] = $_POST['asunto'];
				$datos['contacto.tema'] = $_POST['tema'];
				$datos['contacto.mensaje'] = $_POST['mensaje'];
				$datos['sitio.url'] = $ini["sistema"]["url"];
				
				$email = new TMail2();
				$email->setTema("Quieren hacer contacto");
				$email->addDestino($ini['sistema']['contacto'], "Contacto");
				$email->setBodyHTML(utf8_decode($email->construyeMail(file_get_contents("repositorio/mail/contacto.html"), $datos)));
				
				$smarty->assign("json", array("band" => $email->send()));
			break;
		}
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
			if (file_exists("repositorio/negocios/".$row['idUsuario'].".jpg")){
				$row['logotipo'] = "repositorio/negocios/".$row['idUsuario'].".jpg";
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
		}
		
		
		$smarty->assign("negocios", $datos);
	break;
}