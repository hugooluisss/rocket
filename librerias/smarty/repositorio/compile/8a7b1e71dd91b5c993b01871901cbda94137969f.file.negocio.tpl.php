<?php /* Smarty version Smarty-3.1.11, created on 2017-09-06 19:01:14
         compiled from "templates/plantillas/modulos/inicio/negocio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179754571059aec647ec2737-53387552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a7b1e71dd91b5c993b01871901cbda94137969f' => 
    array (
      0 => 'templates/plantillas/modulos/inicio/negocio.tpl',
      1 => 1504637813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179754571059aec647ec2737-53387552',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59aec647ec4b12_63701163',
  'variables' => 
  array (
    'negocio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aec647ec4b12_63701163')) {function content_59aec647ec4b12_63701163($_smarty_tpl) {?><form id="frmRegistroNegocio" class="form-horizontal" role="form">
	<div class="modal fade" id="winDatosNegocio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h5 class="modal-title" id="exampleModalLabel">Actualizar información</h5>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtRazonSocial">Razón social</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtRazonSocial" name="txtRazonSocial" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getRazonSocial();?>
">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtGiro">Giro del negocio</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtGiro" name="txtGiro" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getGiro();?>
">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtContacto">Contacto</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getNombre();?>
">
						</div>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="txtApellidos" name="txtApellidos" placeholder="Apellidos" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getApellidos();?>
">
						</div>
					</div>
					<hr />
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtRFC">RFC</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtRFC" name="txtRFC" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getRFC();?>
">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtCalle">Calle y número</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtCalle" name="txtCalle" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getCalle();?>
">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtColonia">Colonia</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txtColonia" name="txtColonia" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getColonia();?>
">
						</div>
						<label class="col-sm-3 control-label" for="txtCodigoPostal">Código Postal</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txtCodigoPostal" name="txtCodigoPostal" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getCodigoPostal();?>
">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtLocalidad">Localidad</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txtLocalidad" name="txtLocalidad" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getLocalidad();?>
">
						</div>
						<label class="col-sm-3 control-label" for="txtMunicipio">Municipio</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txtMunicipio" name="txtMunicipio" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getMunicipio();?>
">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtEntidadFederativa">Entidad Federativa</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txtEntidadFederativa" name="txtEntidadFederativa" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getEntidadFederativa();?>
">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtTelefono">Telefono</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txtTelefono" name="txtTelefono" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getTelefono();?>
">
						</div>
						<label class="col-sm-3 control-label" for="txtCorreo">Correo</label>
						<div class="col-sm-3">
							<input type="email" class="form-control" id="txtCorreo" name="txtCorreo" disabled="true" readonly="true" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getCorreo();?>
">
						</div>
					</div>
				</div>
			
				<div class="modal-footer text-right">
					<button type="submit" class="btn btn-primary">Actualizar</button>
				</div>
			</div>
		</div>
	</div>
</form><?php }} ?>