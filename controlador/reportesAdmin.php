<?php
global $objModulo;
switch($objModulo->getId()){
	case 'reporteListaRegalias':
		$db = TBase::conectaDB();
		$inicio = new DateTime($_POST['inicio']);
		$fin = new DateTime($_POST['fin']); 
		$fin->add(new DateInterval('P1D'));
		$sql = "select a.*, b.nombre as tipomovimiento, b.color, c.* from regalia a join tipomovimiento b using(idTipoMovimiento) join negocio c using(idUsuario) where registro between '".$inicio->format("Y-m-d")."' and '".$fin->format("Y-m-d")."'";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
		
		$sql = "select b.nombre, sum(monto) as monto from regalia a right join tipomovimiento b using(idTipoMovimiento) where registro between '".$inicio->format("Y-m-d")."' and '".$fin->format("Y-m-d")."' group by idTipoMovimiento";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		$smarty->assign("tipo", $datos);
	break;
}
?>