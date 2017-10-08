<?php
/**
* TMovimiento
* Usuarios del sistema
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/
class TMovimiento{
	private $idMovimiento;
	public $socio;
	public $negocio;
	public $tipo;
	private $efectivo;
	private $rocketpoints;
	
	private $puntos;
	private $registro;
	private $comision;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TMovimiento($id = ''){
		$this->socio = new TSocio;
		$this->negocio = new TNegocio;
		$this->tipo = new TTipoMovimiento;
		
		$this->setId($id);		
		return true;
	}
	
	/**
	* Carga los datos del objeto
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setId($id = ''){
		if ($id == '') return false;
		
		parent::setId($id);
		
		$db = TBase::conectaDB();
		$rs = $db->query("select * from negocio a where idUsuario = ".$id);
		
		foreach($rs->fetch_assoc() as $field => $val){
			switch($field){
				case 'idSocio':
					$this->socio = new TSocio($val);
				break;
				case 'idNegocio':
					$this->negocio = new TNegocio($val);
				break;
				case 'idTipoMovimiento':
					$this->tipo = new TTipoMovimiento($val);
				break;
				default:
					$this->$field = $val;
			}
		}
		
		return true;
	}
	
	/**
	* Retorna el identificador del objeto
	*
	* @autor Hugo
	* @access public
	* @return integer identificador
	*/
	
	public function getId(){
		return $this->idMovimiento;
	}
	
	/**
	* Establece el efectivo
	*
	* @autor Hugo
	* @access public
	* @param decimal $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setEfectivo($val = 0){
		$this->efectivo = $val;
		return true;
	}
	
	/**
	* Retorna el monto
	*
	* @autor Hugo
	* @access public
	* @return string decimal
	*/
	
	public function getEfectivo(){
		return $this->efectivo == ''?0:$this->efectivo;
	}
	
	/**
	* Establece los rocketpoints
	*
	* @autor Hugo
	* @access public
	* @param decimal $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setRocketPoints($val = 0){
		$this->rocketpoints = $val;
		return true;
	}
	
	/**
	* Retorna el monto
	*
	* @autor Hugo
	* @access public
	* @return string decimal
	*/
	
	public function getRocketPoints(){
		return $this->rocketpoints == ''?0:$this->rocketpoints;
	}
	
	/**
	* Establece la comisión para la empresa
	*
	* @autor Hugo
	* @access public
	* @param decimal $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setComision($val = 0){
		$this->comision = $val;
		return true;
	}
	
	/**
	* Retorna la comisión cobrada a la empresa
	*
	* @autor Hugo
	* @access public
	* @return string decimal
	*/
	
	public function getComision(){
		return $this->comision == ''?0:$this->comision;
	}
	
	/**
	* Calcula los puntos y regalías obtenidas
	*
	* @autor Hugo
	* @access public
	* @param decimal $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function calculaComisiones(){
		$puntos = ($this->getEfectivo() + $this->getRocketPoints())  * $this->tipo->getOperador();
		
		if ($this->tipo->aplicaComision()){
			$this->setPuntos(($puntos * ($this->negocio->getComision() - 1.5) / 100) - $this->getRocketPoints());
			$this->setRegalias($puntos * 1.5 / 100);
			$this->setComision($puntos * $this->negocio->getComision() / 100 * -1);
		}else{
			$this->setPuntos($puntos);
			$this->setRegalias(0);
			$this->setComision($puntos * -1);
		}
			
		return true;
	}
	
	/**
	* Establece los puntos
	*
	* @autor Hugo
	* @access public
	* @param decimal $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPuntos($val = 0){
		$this->puntos = $val;
		return true;
	}
	
	/**
	* Retorna los puntos
	*
	* @autor Hugo
	* @access public
	* @return string decimal
	*/
	
	public function getPuntos(){
		return $this->puntos == ''?0:$this->puntos;
	}
	
	/**
	* Establece las regalias
	*
	* @autor Hugo
	* @access public
	* @param decimal $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setRegalias($val = 0){
		$this->regalias = $val;
		return true;
	}
	
	/**
	* Retorna las regalias
	*
	* @autor Hugo
	* @access public
	* @return string decimal
	*/
	
	public function getRegalias(){
		return $this->regalias == ''?0:$this->regalias;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		if ($this->tipo->getId() == '') return false;
		if ($this->negocio->getId() == '') return false;
		$this->calculaComisiones();
		
		#if ($this->socio->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "INSERT INTO movimiento(idTipoMovimiento, idNegocio, efectivo, rocketpoints, puntos, regalias, comision) VALUES(".$this->tipo->getId().", ".$this->negocio->getId().", ".($this->getEfectivo() * $this->tipo->getOperador()).", ".$this->getRocketPoints().", ".$this->getPuntos().", ".($this->getRegalias()).", ".$this->getComision().");";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		$this->idMovimiento = $db->insert_id;
		
		if($rs and $this->socio->getId() <> ''){
			$sql = "INSERT INTO sociomovimiento(idMovimiento, idusuario) VALUES(".$this->getId().", ".$this->socio->getId().");";
			$rs = $db->query($sql) or errorMySQL($db, $sql);
			
			$this->socio->addPuntos($this->getPuntos());
			$this->socio->guardar();
		}
		
		return $rs?true:false;
	}
	
	/**
	* Borra un movimiento de la base de datos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->query("delete from movimiento where idMovimiento = ".$this->getId());
			
		return $rs?true:false;
	}
}
?>