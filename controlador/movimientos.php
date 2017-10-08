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
		$sql = "select a.*, b.color, b.nombre as nombreTipo from movimiento a join tipomovimiento b using(idTipoMovimiento) where idNegocio = ".$userSesion->getId()." order by a.registro";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		
		while($row = $rs->fetch_assoc()){
			$obj = new TNegocio($row['idUsuario']);
			
			$sql = "select c.nombre, c.app, c.apm, concat(app, ' ', apm) as apellidos from sociomovimiento a join socio b using(idUsuario) join usuario c using(idUsuario) where idMovimiento = ".$row['idMovimiento'];
			$rs2 = $db->query($sql) or errorMySQL($db, $sql);
			$row2 = $rs2->fetch_assoc();
			
			$row['socio'] = $row2['nombre'].' '.$row2['apellidos'];
			
			$row['comision'] = $obj->getComision();
			$row['pass'] = '';
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'listaMovimientosNegocio':
		$db = TBase::conectaDB();
		$inicio = $_POST['inicio'] == ''?date("Y-m-d"):$_POST['inicio'];
		$fin = $_POST['fin'] == ''?date("Y-m-d"):$_POST['fin'];
		
		$sql = "select idMovimiento, idNegocio, b.nombre as tipomovimiento, a.efectivo, a.rocketpoints, a.puntos, a.comision, a.regalias, a.registro, b.color from movimiento a join tipomovimiento b using(idTipoMovimiento) where idNegocio = ".$_POST['negocio']." and registro >= '".$inicio." 00:00:00' and registro <= '".$fin." 23:59:59' order by a.registro";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		$monto = 0;
		$puntos = 0;
		$regalias = 0;
		while($row = $rs->fetch_assoc()){
			$sql = "select idUsuario from sociomovimiento where idMovimiento = ".$row['idMovimiento'];
			$rs2 = $db->query($sql) or errorMySQL($db, $sql);
			$movimiento = $rs2->fetch_assoc();
			$socio = new TSocio($movimiento['idUsuario']);
			
			$row["socio"] = $socio->getNombre()." ".$socio->getApp()." ".$socio->getApm();
			$row['json'] = json_encode($row);
			array_push($datos, $row);
			
			$comision += $row['comision'];
			$regalias += $row['regalias'];
		}
		
		$smarty->assign("lista", $datos);
		
		$smarty->assign("comision", sprintf("%0.2f", $comision));
		$smarty->assign("regalias", sprintf("%0.2f", $regalias));
	break;
	case 'listaMovimientosSocio':
		$db = TBase::conectaDB();
		$inicio = $_POST['inicio'] == ''?date("Y-m-d"):$_POST['inicio'];
		$fin = $_POST['fin'] == ''?date("Y-m-d"):$_POST['fin'];
		
		$sql = "select idMovimiento, idNegocio, b.nombre as tipomovimiento, a.efectivo, a.rocketpoints, a.puntos, a.comision, a.regalias, a.registro, b.color from sociomovimiento aa join movimiento a using(idMovimiento) join tipomovimiento b using(idTipoMovimiento) where aa.idUsuario = ".$_POST['socio']." and registro >= '".$inicio." 00:00:00' and registro <= '".$fin." 23:59:59' order by a.registro";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$negocio = new TNegocio($row['idNegocio']);
			$row["negocio"] = $negocio->getRazonSocial();
			
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
				if ($band){
					$obj = new TMovimiento();
					$obj->tipo = new TTipoMovimiento($_POST['puntos'] == '' or $_POST['puntos'] == 0?1:2);
					$obj->socio = new TSocio($_POST['socio']);
					$obj->negocio = new TNegocio($userSesion->getId());
					$obj->setEfectivo($_POST['efectivo']);
					$obj->setRocketPoints($_POST['puntos']);
					
					$band = $obj->guardar();
					if ($band)
						$obj->negocio->addSaldo(($obj->getPuntos() + $obj->getRegalias() + $obj->getRocketPoints()) * -1);
					
				}
				
				$smarty->assign("json", array("band" => $band, "saldo" => $obj->negocio->getSaldo()));
			break;
			case 'canjearPuntos':
				$band = true;
				$obj = new TMovimiento();
				
				$obj->tipo = new TTipoMovimiento(3);
				$obj->socio = new TSocio($_POST['socio']);
				$obj->negocio = new TNegocio($userSesion->getId());
				$obj->setRocketPoints($_POST['puntos']);
				$band = $obj->guardar();
				
				if($band)
					$obj->negocio->addSaldo($_POST['puntos']);
				
				$smarty->assign("json", array("band" => $band, "saldo" => $obj->negocio->getSaldo()));
			break;
			case 'estadoCuentaEmpresa':
				require_once(getcwd()."/repositorio/pdf/estadoCuenta.php");
				$pdf = new REstadoCuenta($_POST['negocio'], $_POST['inicio'], $_POST['fin']);
				$pdf->generar();
				
				$documento = $pdf->Output();
				$smarty->assign("json", array("band" => $documento <> '', "uri" => $documento));
			break;
			case 'estadoCuentaSocio':
				require_once(getcwd()."/repositorio/pdf/estadoCuentaSocio.php");
				$pdf = new REstadoCuentaSocio($_POST['socio'], $_POST['inicio'], $_POST['fin']);
				$pdf->generar();
				
				$documento = $pdf->Output();
				$smarty->assign("json", array("band" => $documento <> '', "uri" => $documento));
			break;
		}
	break;
}
?>