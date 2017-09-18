<?php /* Smarty version Smarty-3.1.11, created on 2017-09-18 11:44:17
         compiled from "templates/plantillas/modulos/front-end/contactanos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44661977559b9dec8cf6252-42651525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cefc1ea36dce0f8449405233f043a73f1c538e75' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/contactanos.tpl',
      1 => 1505496504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44661977559b9dec8cf6252-42651525',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b9dec8d45a42_91741979',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b9dec8d45a42_91741979')) {function content_59b9dec8d45a42_91741979($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Contáctanos</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<form id="frmContacto" role="form" method="post" onsubmit="javascript: return false;">
				<div class="form-group">
					<label for="txtAsunto">Asunto</label>
					<input type="text" class="form-control" id="txtAsunto" name="txtAsunto" placeholder="¿Por que haces contacto con nosotros?">
				</div>
				<div class="form-group">
					<label for="txtNombre">Nombre</label>
					<input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Escribe tu nombre completo">
				</div>
				<div class="form-group">
					<label for="txtCorreo">Correo electrónico</label>
					<input type="text" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Danos tu correo para responderte el mensaje">
				</div>
				<div class="form-group">
					<label for="txtMensaje">Mensaje</label>
					<textarea id="txtMensaje" name="txtMensaje" class="form-control" placeholder="¿Cual es tu mensaje?"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-8">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3745.8828794009996!2d-101.19020978555952!3d20.138933222934273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cfaeb3a8b61f3%3A0xfe14e5cc13fa1316!2sCalle+%C3%81lvaro+Obreg%C3%B3n+208%2C+Revolucion%2C+Uriangato%2C+Gto.!5e0!3m2!1ses-419!2smx!4v1505354087951" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>

<br /><br /><br /><br /><?php }} ?>