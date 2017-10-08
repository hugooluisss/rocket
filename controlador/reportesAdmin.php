<?php
global $objModulo;
switch($objModulo->getId()){
	case 'reporteListaRegalias':
		$db = TBase::conectaDB();
		$inicio = new DateTime($_POST['inicio']);
		$fin = new DateTime($_POST['fin']); 
		$fin->add(new DateInterval('P1D'));
		$sql = "select a.*, b.nombre as tipomovimiento, b.color, c.*, d.idUsuario as socio from movimiento a join tipomovimiento b using(idTipoMovimiento) join negocio c on a.idNegocio = c.idUsuario left join sociomovimiento d using(idMovimiento) where registro between '".$inicio->format("Y-m-d")."' and '".$fin->format("Y-m-d")."'";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$socio = new TSocio($row['socio']);
			$row["socio"] = $socio->getNombre().' '.$socio->getApp().' '.$socio->getApm();
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
}
?>