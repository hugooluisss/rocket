<?php /* Smarty version Smarty-3.1.11, created on 2017-09-07 09:50:24
         compiled from "templates/plantillas/modulos/usuarios/registro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65686298459adfea34b6398-12215798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44aef2f9887dfb115ffa8db20a4f38d37d014834' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/registro.tpl',
      1 => 1504716964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65686298459adfea34b6398-12215798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59adfea34ba5f0_88192593',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59adfea34ba5f0_88192593')) {function content_59adfea34ba5f0_88192593($_smarty_tpl) {?><form id="frmRegistroSocio" class="form-horizontal" role="form">
	<div class="modal fade modal-primary" id="winRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h5 class="modal-title" id="exampleModalLabel">Registrate ahora</h5>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label class="col-sm-4 control-label" for="txtNombre">Nombre</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="txtApellidos">Apellidos</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="txtApellidos" name="txtApellidos">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="txtMunicipio">Municipio</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="txtMunicipio" name="txtMunicipio">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="txtEntidadFederativa">Entidad federativa</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="txtEntidadFederativa" name="txtEntidadFederativa">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="txtCorreo">Correo electrónico</label>
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
					
					<div class="form-group">
						<label class="col-sm-4 control-label" for="txtPass2">Confirma la contraseña</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="txtPass2" name="txtPass2">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Registrarme</button>
				</div>
			</div>
		</div>
	</div>
</form><?php }} ?>