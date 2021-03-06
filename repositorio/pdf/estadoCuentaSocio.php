<?php
class REstadoCuentaSocio extends tFPDF{
	private $cotizacion;
	
	public function REstadoCuentaSocio($id, $inicio = '', $fin = ''){
		$this->socio =  new TNegocio($id);
		
		parent::tFPDF('P', 'mm', 'Letter');
		$this->AddFont('Sans','', 'DejaVuSans.ttf', true);
		$this->AddFont('Sans','B', 'DejaVuSans-Bold.ttf', true);
		$this->AddFont('Sans','U', 'DejaVuSans-Oblique.ttf', true);
		$this->AddFont('Sans','BU', 'DejaVuSans-BoldOblique.ttf', true);
		$this->total = 0;
		
		$this->inicio = $inicio == ''?(date("Y-").(date("m")-1).date("-d")):$inicio;
		$this->fin = $fin == ''?date("Y-m-d"):$fin;
		
		$this->cleanFiles();
	}	
	
	public function Header(){
		$y = $this->GetY();
		$this->Rect(0, 0, 300, 35, "DF");
    	$this->Image("repositorio/logoNegro.jpg", 5, 5, 40, 20);
		
		$this->SetY($y);
    	$this->SetFont('Sans', 'B', 12);
    	$this->SetTextColor(255, 255, 255);
    	#$this->Ln(10);
    	$y = $this->GetY();
    	$this->Cell(0, 5, "Estado de cuenta", 0, 0, 'R');
    	$this->Ln(4);
    	$this->SetFont('Sans', '', 8);
    	$this->Cell(0, 5, "Generado el: ".date("Y-m-d"), 0, 0, 'R');
    	$this->Ln(4);
    	$this->Cell(0, 5, "Del ".$this->inicio." al ".$this->fin, 0, 0, 'R');
    	$this->Ln(4);
    	$this->Cell(0, 5, $this->socio->getNombre().' '.$this->socio->getApp().' '.$this->socio->getApm(), 0, 0, 'R');
    	$this->Ln(4);
    	$this->SetTextColor(0, 0, 0);
    	
    	$this->Ln(10);
    	#Inicio del detalle de la venta
    	$this->SetFont('Sans', 'B', 6);
    	$this->SetFillColor(160);
    	$this->Cell(30, 4, "Fecha", 0, 0, '', 1);
    	$this->Cell(35, 4, "Negocio", 0, 0, '', 1);
    	$this->Cell(47, 4, "Movimiento", 0, 0, '', 1);
    	$this->Cell(28, 4, "Efectivo", 0, 0, '', 1);
    	$this->Cell(28, 4, "Rocket Points", 0, 0, '', 1);
    	$this->Cell(28, 4, "Puntos Generados", 0, 0, '', 1);
    	$this->Ln(4);
	}
	
	public function generar(){
		$this->AddPage();
		
		$inicio = $this->inicio;
		$fin = $this->fin;
		
		$this->SetFont('Sans', '', 6);
		$db = TBase::conectaDB();
		
		$sql = ("select a.*, b.nombre as movimiento, c.idUsuario from movimiento a join tipomovimiento b using(idTipoMovimiento) join sociomovimiento c using(idMovimiento) where c.idUsuario = ".$this->socio->getId()." and a.registro >= '".$inicio." 00:00:00' and  a.registro <= '".$fin." 23:59:59' order by a.registro desc");
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$cont = 1;
		$datos = array();
		while($row = $rs->fetch_assoc()){
			array_push($datos, $row);
		}
		
		$cobro = 0;
		foreach(array_reverse($datos) as $row){
			if ($cont++ % 2 == 0)
				$this->SetFillColor(230);
			else
				$this->SetFillColor(255);
				
			$negocio = new TNegocio($row['idSocio']);
			
			$this->Cell(30, 4, $row["registro"], 0, 0, '', 1);
	    	$this->Cell(35, 4, $negocio->getNombre()." ".$negocio->getApp()." ".$negocio->getApm(), 0, 0, '', 1);
	    	$this->Cell(47, 4, $row["movimiento"], 0, 0, '', 1);
	    	$this->Cell(28, 4, number_format($row["efectivo"], 2, '.', ','), 0, 0, 'R', 1);
	    	$this->Cell(28, 4, number_format($row["rocketpoints"], 2, '.', ','), 0, 0, 'R', 1);
	    	$this->Cell(28, 4, number_format($row["puntos"], 2, '.', ','), 0, 0, 'R', 1);
	    	$this->Ln(4);
	    	$cobro += $row['puntos'];
	    	
			array_push($datos, $row);
		}
		
		$this->SetFont('Sans', 'B', 8);
		$this->Cell(65 + 47 + 28 * 2, 4, "Puntos acumulados en el periodo", 'T', 0, 'R');
		$this->Cell(28, 4, number_format($cobro, 2, '.', ','), 'T', 0, 'R');
	}
	
	function Footer(){
	}
	
	private function cleanFiles(){
    	$t = time();
    	$dir = "temporal";
    	$h = opendir($dir);
    	while($file=readdir($h)){
        	if(substr($file,0,3)=='tmp' && substr($file,-4)=='.pdf'){
            	$path = $dir.'/'.$file;
            	if($t-filemtime($path)>3600)
                	@unlink($path);
        	}
    	}
    	closedir($h);
	}
	
	public function Output(){
		$file = "temporal/".basename(tempnam("temporal/", 'tmp'));
		rename($file, $file.'.pdf');
		$file .= '.pdf';
		parent::Output($file, 'F');
		chmod($file, 0777);
		//header('Location: temporal/'.$file);
		
		return $file;
	}
}
?>