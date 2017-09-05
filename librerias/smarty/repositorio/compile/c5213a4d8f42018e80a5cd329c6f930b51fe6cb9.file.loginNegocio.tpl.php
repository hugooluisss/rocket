<?php /* Smarty version Smarty-3.1.11, created on 2017-09-05 10:02:06
         compiled from "templates/plantillas/modulos/usuarios/loginNegocio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167907404159aeb813b80052-31965204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5213a4d8f42018e80a5cd329c6f930b51fe6cb9' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/loginNegocio.tpl',
      1 => 1504623116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167907404159aeb813b80052-31965204',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59aeb813b81bf9_42184311',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aeb813b81bf9_42184311')) {function content_59aeb813b81bf9_42184311($_smarty_tpl) {?><form id="frmLoginNegocio" class="form-horizontal" role="form">
	<div class="modal fade modal-primary" id="winNegocioLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h5 class="modal-title" id="exampleModalLabel">¿Eres un negocio? inicia sesión</h5>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label class="col-sm-4 control-label" for="txtCorreoasdf">Correo electrónico</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" id="txtCorreo" name="txtCorreo">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="txtPass">Contraseña</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="txtPass" name="txtPass">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Iniciar</button>
				</div>
			</div>
		</div>
	</div>
</form><?php }} ?>