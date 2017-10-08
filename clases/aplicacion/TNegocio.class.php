<?php
/**
* TNegocio
* Usuarios del sistema
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/
include_once("clases/aplicacion/TUsuario.class.php");
class TNegocio extends TUsuario{
	private $idUsuario;
	private $razonsocial;
	private $giro;
	private $rfc;
	private $calle;
	private $numero;
	private $colonia;
	private $codigopostal;
	private $localidad;
	private $municipio;
	private $entidadfederativa;
	private $telefono;
	private $plus;
	private $saldo;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TNegocio($id = ''){
		parent::TUsuario($id);
		$this->plus = 0;
		$this->saldo = 0;
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
		return parent::getId();
		#return $this->idUsuario;
	}
	
	/**
	* Establece la razón social
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setRazonSocial($val = ''){
		$this->razonsocial = $val;
		return true;
	}
	
	/**
	* Retorna la razón social
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getRazonSocial(){
		return $this->razonsocial;
	}
	
	/**
	* Establece el giro
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setGiro($val = ''){
		$this->giro = $val;
		return true;
	}
	
	/**
	* Retorna el giro
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getGiro(){
		return $this->giro;
	}
	
	/**
	* Establece el rfc
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setRFC($val = ''){
		$this->rfc = $val;
		return true;
	}
	
	/**
	* Retorna el rfc
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getRFC(){
		return $this->rfc;
	}
	
	/**
	* Establece la calle
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCalle($val = ''){
		$this->calle = $val;
		return true;
	}
	
	/**
	* Retorna la calle
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getCalle(){
		return $this->calle;
	}
	
	/**
	* Establece el número
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setNumero($val = ''){
		$this->numero = $val;
		return true;
	}
	
	/**
	* Retorna el numero
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getNumero(){
		return $this->numero;
	}
	
	/**
	* Establece la colonia
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setColonia($val = ''){
		$this->colonia = $val;
		return true;
	}
	
	/**
	* Retorna la colonia
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getColonia(){
		return $this->colonia;
	}
	
	/**
	* Establece el codigopostal
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCodigoPostal($val = ''){
		$this->codigopostal = $val;
		return true;
	}
	
	/**
	* Retorna el codigopostal
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getCodigoPostal(){
		return $this->codigopostal;
	}
	
	/**
	* Establece la localidad
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setLocalidad($val = ''){
		$this->localidad = $val;
		return true;
	}
	
	/**
	* Retorna la localidad
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getLocalidad(){
		return $this->localidad;
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
	* Establece el telefono
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setTelefono($val = ''){
		$this->telefono = $val;
		return true;
	}
	
	/**
	* Retorna el telefono
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getTelefono(){
		return $this->telefono;
	}
	
	/**
	* Establece si es considerado como plus o no
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPlus($val = 0){
		$this->plus = $val;
		return true;
	}
	
	/**
	* Retorna si es plus
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getPlus(){
		return $this->plus;
	}
	
	/**
	* Retorna la comisión que se tiene activa
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getComision(){
		if ($this->getId() == '') return 0;
		
		$db = TBase::conectaDB();
		$sql = "select comision from negocio where idUsuario = ".$this->getId();
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$row = $rs->fetch_assoc();
		global $ini;
		return $row['comision'] == ''?$ini['sistema']['comision']:$row['comision'];
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
		global $ini;
		
		$db = TBase::conectaDB();
		$sql = "select idUsuario from negocio where idUsuario = ".$this->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		if ($rs->num_rows == 0){
			$rs = $db->query("INSERT INTO negocio(idUsuario) VALUES(".$this->getId().");");
			
			if (!$rs) return false;
		}		
		
		if ($this->getId() == '')
			return false;
		
		$sql = "UPDATE negocio
			SET
				razonsocial = '".$this->getRazonSocial()."',
				giro = '".$this->getGiro()."',
				rfc = '".$this->getRFC()."',
				calle = '".$this->getCalle()."',
				numero = '".$this->getNumero()."',
				colonia = '".$this->getColonia()."',
				codigopostal = '".$this->getCodigoPostal()."',
				localidad = '".$this->getLocalidad()."',
				municipio = '".$this->getMunicipio()."',
				entidadfederativa = '".$this->getEntidadFederativa()."',
				telefono = '".$this->getTelefono()."',
				plus = ".$this->getPlus().",
				saldo = ".$this->getSaldo()."
			WHERE idUsuario = ".$this->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
			
		return $rs?true:false;
	}
	
	/**
	* Agrega una comision
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setComision($comision = 0){
		if ($this->getId() == '') return false;
		
		$fecha = new DateTime();
		$fecha->add(new DateInterval('PT24H'));
		$db = TBase::conectaDB();
		$sql = "update negocio set comision = ".$comision.", setComision = '".$fecha->format("Y-m-d H:i:s")."' where idUsuario = ".$this->getId();
		$db->query($sql) or errorMySQL($db, $sql);
		
		return true;
	}
	
	/**
	* Agrega saldo
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function addSaldo($saldo = 0){
		if ($saldo == 0) return false;
		if ($saldo == '') return false;
		
		if ($this->getId() == '') return false;
		
		$this->saldo += $saldo;
		$this->guardar();
		
		return true;
	}
	
	/**
	* Retorna el saldo
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getSaldo(){
		return $this->saldo == ''?0:$this->saldo;
	}
}
?>