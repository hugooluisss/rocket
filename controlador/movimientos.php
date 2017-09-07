<?php
global $objModulo;
switch($objModulo->getId()){
	case 'movimientos':
		$negocio = new TNegocio($userSesion->getId());
		$smarty->assign("esPlus", $negocio->getPlus() == 1);
	break;
	case 'listaMovimientos':
		$db = TBase::conectaDB();
		$sql = "select a.*, c.nombre, c.apellidos, d.color, d.nombre as nombreTipo from movimiento a join socio b on a.idSocio = b.idUsuario join usuario c using(idUsuario) join tipomovimiento d using(idTipoMovimiento) where idNegocio = ".$userSesion->getId()." order by a.registro";
		
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
	case 'cmovimientos':
		switch($objModulo->getAction()){
			case 'addVenta':
				$obj = new TMovimiento();
				$band = true;
				#primero el canje de puntos
				if ($_POST['puntos'] <> '' and $_POST['puntos'] > 0){
					$obj = new TMovimiento();
					
					$obj->tipo = new TTipoMovimiento(2);
					$obj->socio = new TSocio($_POST['socio']);
					$obj->negocio = new TNegocio($userSesion->getId());
					$obj->setMonto($_POST['puntos']);
					$band = $obj->guardar();
				}
				
				if ($band){
					$obj = new TMovimiento();
					$obj->tipo = new TTipoMovimiento(1);
					$obj->socio = new TSocio($_POST['socio']);
					$obj->negocio = new TNegocio($userSesion->getId());
					$obj->setMonto($_POST['efectivo'] + $_POST['puntos']);
					$band = $obj->guardar();
				}
				
				$smarty->assign("json", array("band" => $band));
			break;
			case 'canjearPuntos':
				$obj = new TMovimiento();
				$band = true;
				#primero el canje de puntos
				$obj = new TMovimiento();
				
				$obj->tipo = new TTipoMovimiento(3);
				$obj->socio = new TSocio($_POST['socio']);
				$obj->negocio = new TNegocio($userSesion->getId());
				$obj->setMonto($_POST['puntos']);
				$band = $obj->guardar();
				
				$smarty->assign("json", array("band" => $band));
			break;
		}
	break;
}
?>