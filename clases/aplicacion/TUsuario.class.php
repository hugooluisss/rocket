<?php
/**
* TUsuario
* Usuarios del sistema
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TUsuario{
	private $idUsuario;
	private $idTipo;
	private $nombre;
	private $apellidos;
	private $correo;
	private $pass;
	private $visible;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TUsuario($id = ''){
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
		$rs = $db->query("select * from usuario a where idUsuario = ".$id);
		
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
	* Establece el valor de tipo de usuario
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar por default es 2 que hace referencia a doctor
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setTipo($val = 3){
		$this->idTipo = $val;
		return true;
	}
	
	/**
	* Retorna las el identificador del tipo de usuario
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getIdTipo(){
		return $this->idTipo;
	}
	
	/**
	* Retorna el tipo
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getTipo(){
		if ($this->getIdTipo() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->query("select nombre from tipousuario where idTipoUsuario = ".$this->getIdTipo());
		$row = $rs->fetch_assoc();
		return $row['nombre'];
	}
	
	/**
	* Retorna el tipo como si fuera un perfil
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getPerfil(){
		return $this->getIdTipo();
	}
		
	/**
	* Establece el nombre
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setNombre($val = ''){
		$this->nombre = $val;
		return true;
	}
	
	/**
	* Retorna el nombre
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getNombre(){
		return $this->nombre;
	}
	
	/**
	* Establece el apellido
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setApellidos($val = ''){
		$this->apellidos = $val;
		return true;
	}
	
	/**
	* Retorna el apellido
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getApellidos(){
		return $this->apellidos;
	}
	
	/**
	* Establece el correo
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCorreo($val = ''){
		$this->correo = $val;
		return true;
	}
	
	/**
	* Retorna el correo
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getCorreo(){
		return $this->correo;
	}
	
	/**
	* Establece el valor del password
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPass($val = ''){
		$this->pass = $val;
		return true;
	}
	
	/**
	* Retorna el password
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getPass(){
		return $this->pass;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		if ($this->getIdTipo() == '') return false;
		
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->query("INSERT INTO usuario(idTipo, visible) VALUES(".$this->getIdTipo().", true);");
			if (!$rs) return false;
				
			$this->idUsuario = $db->insert_id;
		}		
		
		if ($this->getId() == '')
			return false;
		
		$sql = "UPDATE usuario
			SET
				idTipo = ".$this->getIdTipo().",
				nombre = '".$this->getNombre()."',
				apellidos = '".$this->getApellidos()."'
				correo = '".$this->getCorreo()."',
				pass = '".$this->getPass()."'
			WHERE idUsuario = ".$this->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
			
		return $rs?true:false;
	}
	
	/**
	* Elimina el objeto de la base de datos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "update usuario set visible = false where idUsuario = ".$this->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		return $rs?true:false;
	}
}
?>