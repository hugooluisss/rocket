<?php
/**
* TTipoMovimiento
* Usuarios del sistema
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/
class TTipoMovimiento{
	private $idTipoMovimiento;
	private $nombre;
	private $operacion;
	private $color;
	private $aplicacomision;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TTipoMovimiento($id = ''){
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
		
		$db = TBase::conectaDB();
		$rs = $db->query("select * from tipomovimiento a where idTipoMovimiento = ".$id);
		
		foreach($rs->fetch_assoc() as $field => $val){
			switch($field){
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
		return $this->idTipoMovimiento;
	}
	
	/**
	* Retorna el nombre
	*
	* @autor Hugo
	* @access public
	* @return integer identificador
	*/
	
	public function getNombre(){
		return $this->nombre;
	}
	
	/**
	* Retorna el operador
	*
	* @autor Hugo
	* @access public
	* @return integer identificador
	*/
	
	public function getOperador(){
		return $this->operacion == ''?1:$this->operacion;
	}
	
	/**
	* Retorna si aplica comision
	*
	* @autor Hugo
	* @access public
	* @return integer identificador
	*/
	
	public function aplicaComision(){
		return $this->aplicacomision == 1;
	}
}
?>