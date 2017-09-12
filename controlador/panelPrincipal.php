<?php
global $objModulo;
switch($objModulo->getId()){
	default:
		if ($userSesion->getPerfil() == 3)
		header('Location: sociopanel');
	break;
}
?>