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
	private $monto;
	private $puntos;
	private $registro;
	
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
	* Establece el monto
	*
	* @autor Hugo
	* @access public
	* @param decimal $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setMonto($val = 0){
		$this->monto = $val;
		$puntos = $this->getMonto() * $this->tipo->getOperador();
		
		if ($this->tipo->aplicaComision())
			$this->setPuntos($puntos * $this->negocio->getComision() / 100);
		else
			$this->setPuntos($puntos);
			
		return true;
	}
	
	/**
	* Retorna el monto
	*
	* @autor Hugo
	* @access public
	* @return string decimal
	*/
	
	public function getMonto(){
		return $this->monto == ''?0:$this->monto;
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
	* Retorna el monto
	*
	* @autor Hugo
	* @access public
	* @return string decimal
	*/
	
	public function getPuntos(){
		return $this->puntos == ''?0:$this->puntos;
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
		if ($this->socio->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->query("INSERT INTO movimiento(idTipoMovimiento, idSocio, idNegocio, monto, puntos) VALUES(".$this->tipo->getId().", ".$this->socio->getId().", ".$this->negocio->getId().", ".$this->getMonto().", ".$this->getPuntos().");");
		
		if($rs){
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