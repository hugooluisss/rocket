<?php /* Smarty version Smarty-3.1.11, created on 2017-09-23 22:49:12
         compiled from "templates/plantillas/modulos/negocios/updateDatos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211108157959b171d8b7cbf1-13549681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f3957b477885f93377da54650b44cdbc6e44b27' => 
    array (
      0 => 'templates/plantillas/modulos/negocios/updateDatos.tpl',
      1 => 1506224940,
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
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b171d8b98c53_24649870')) {function content_59b171d8b98c53_24649870($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Actualizar datos del negocio</h1>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 text-center">
			<img id="imgLogotipo" name="imgLogotipo" src="repositorio/negocios/<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getId();?>
.jpg?<?php echo rand();?>
" onerror="javascript: this.src='repositorio/logo.jpg'" title="Click para cambiar" style="cursor: pointer" data-toggle="modal" data-target="#winLogotipo" identificador="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getId();?>
"/>
	</div>
</div>
<br />

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
			</div>
			<div class="form-group">
				<div class="col-sm-4 col-sm-offset-3">
					<input type="text" class="form-control" id="txtApp" name="txtApp" placeholder="Apellido paterno" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getApp();?>
">
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="txtApm" name="txtApm" placeholder="Apellido materno" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getApm();?>
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
				<div class="col-sm-7">
					<input type="text" class="form-control" id="txtCalle" name="txtCalle" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getCalle();?>
" placeholder="Calle">
				</div>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="txtNumero" name="txtNumero" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getNumero();?>
" placeholder="Número">
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
			<input type="hidden" id="plus" value="<?php echo $_smarty_tpl->tpl_vars['negocio']->value->getPlus();?>
"/>
		</div>
	</div>
</form>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/negocios/winLogotipo.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>