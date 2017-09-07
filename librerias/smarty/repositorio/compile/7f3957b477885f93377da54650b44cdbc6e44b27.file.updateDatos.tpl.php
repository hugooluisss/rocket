<?php /* Smarty version Smarty-3.1.11, created on 2017-09-07 11:50:56
         compiled from "templates/plantillas/modulos/negocios/updateDatos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211108157959b171d8b7cbf1-13549681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f3957b477885f93377da54650b44cdbc6e44b27' => 
    array (
      0 => 'templates/plantillas/modulos/negocios/updateDatos.tpl',
      1 => 1504803045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211108157959b171d8b7cbf1-13549681',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b171d8b98c53_24649870',
  'variables' => 
  array (
    'negocio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b171d8b98c53_24649870')) {function content_59b171d8b98c53_24649870($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Actualizar datos del negocio</h1>
	</div>
</div>

<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
	<div class="box">
		<div class="box-body">
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
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="txtCorreo">Correo</label>
				<div class="col-sm-3">
					<input type="email" class="form-control" id="txtCorreo" name="txtCorreo" disabled="true" readonly="true" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getCorreo();?>
">
				</div>
				<label class="col-sm-3 control-label" for="txtCorreo">Contraseña</label>
				<div class="col-sm-3">
					<input type="password" class="form-control" id="txtPass" name="txtPass">
				</div>
			</div>
			
		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-info pull-right">Guardar</button>
			<input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getId();?>
"/>
		</div>
	</div>
</form><?php }} ?>