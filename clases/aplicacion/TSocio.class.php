<?php
/**
* TSocio
* Usuarios del sistema
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/
include_once("clases/aplicacion/TUsuario.class.php");
class TSocio extends TUsuario{
	private $idUsuario;
	private $municipio;
	private $entidadfederativa;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TSocio($id = ''){
		parent::TUsuario($id);
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
		$rs = $db->query("select * from socio a where idUsuario = ".$id);
		
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
		return $this->idUsuario;
	}
			
	/**
	* Establece el municipio
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setMunicipio($val = ''){
		$this->municipio = $val;
		return true;
	}
	
	/**
	* Retorna el municipio
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getMunicipio(){
		return $this->municipio;
	}
	
	/**
	* Establece el entidad federativa
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setEntidadFederativa($val = ''){
		$this->entidadfederativa = $val;
		return true;
	}
	
	/**
	* Retorna el municipio
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getEntidadFederativa(){
		return $this->entidadfederativa;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		if (parent::guardar() == '') return false;
		
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->query("INSERT INTO socio(idUsuario) VALUES(".$this->getId().");");
			if (!$rs) return false;
		}		
		
		if ($this->getId() == '')
			return false;
		
		$sql = "UPDATE socio
			SET
				municipio = ".$this->getMunicipio().",
				entidadfederativa = '".$this->getEntidadFederativa()."'
			WHERE idUsuario = ".$this->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
			
		return $rs?true:false;
	}
}
?>