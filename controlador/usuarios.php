<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaUsuarios':
		$db = TBase::conectaDB();
		global $sesion;
		$usuario = new TUsuario($sesion['usuario']);
		$sql = "select * from usuario a where a.visible = true and idTipo = 1";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['pass'] = '';
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'cusuarios':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TUsuario();
				
				$rs = $db->query("select idUsuario from usuario where email = '".$_POST['clave']."'");
				$obj = new TUsuario();
				
				$obj->setId($_POST['id']);
				$obj->setTipo(1);
				$obj->setNombre($_POST['nombre']);
				$obj->setApellidos($_POST['apellidos']);
				$obj->setCorreo($_POST['correo']);
				
				if ($_POST['pass'] <> '')
					$obj->setPass($_POST['pass']);
					
				$band = $obj->guardar();
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TUsuario($_POST['usuario']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
			case 'validarEmail':
				$db = TBase::conectaDB();
				if ($_POST['id'] == '')
					$rs = $db->query("select idUsuario from usuario where upper(correo) = upper('".$_POST['txtCorreo']."')");
				else
					$rs = $db->query("select idUsuario from usuario where upper(correo) = upper('".$_POST['txtCorreo']."') and not idUsuario = ".$_POST['id']);
				echo $rs->num_rows == 0?"true":"false";
			break;
		}
	break;
}
?>