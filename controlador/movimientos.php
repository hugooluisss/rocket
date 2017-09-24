<?php
global $objModulo;
switch($objModulo->getId()){
	case 'movimientos':
		$negocio = new TNegocio($userSesion->getId());
		$smarty->assign("esPlus", $negocio->getPlus() == 1);
		$smarty->assign("saldo", $negocio->getSaldo());
	break;
	case 'listaMovimientos':
		$db = TBase::conectaDB();
		$sql = "select a.*, c.nombre, c.app, c.apm, concat(app, ' ', apm) as apellidos, d.color, d.nombre as nombreTipo from movimiento a join socio b on a.idSocio = b.idUsuario join usuario c using(idUsuario) join tipomovimiento d using(idTipoMovimiento) where idNegocio = ".$userSesion->getId()." order by a.registro";
		
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
					if ($band)
						$obj->negocio->addSaldo($_POST['puntos'], 2);
				}
				
				if ($band){
					$obj = new TMovimiento();
					$obj->tipo = new TTipoMovimiento(1);
					$obj->socio = new TSocio($_POST['socio']);
					$obj->negocio = new TNegocio($userSesion->getId());
					$obj->setMonto($_POST['efectivo'] + $_POST['puntos']);
					$band = $obj->guardar();
					if ($band)
						$obj->negocio->addSaldo($_POST['efectivo'] * -0.015, 1);
				}
				
				$smarty->assign("json", array("band" => $band, "saldo" => $obj->negocio->getSaldo()));
			break;
			case 'canjearPuntos':
				$band = true;
				$obj = new TMovimiento();
				
				$obj->tipo = new TTipoMovimiento(3);
				$obj->socio = new TSocio($_POST['socio']);
				$obj->negocio = new TNegocio($userSesion->getId());
				$obj->setMonto($_POST['puntos']);
				$band = $obj->guardar();
				
				if($band)
					$obj->negocio->addSaldo($_POST['puntos'], 3);
				
				$smarty->assign("json", array("band" => $band, "saldo" => $obj->negocio->getSaldo()));
			break;
		}
	break;
}
?>