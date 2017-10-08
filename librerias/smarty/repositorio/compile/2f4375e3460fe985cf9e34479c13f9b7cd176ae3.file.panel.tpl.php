<?php /* Smarty version Smarty-3.1.11, created on 2017-10-06 23:42:13
         compiled from "templates/plantillas/modulos/socios/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169697925959b0286299c6b6-37358119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f4375e3460fe985cf9e34479c13f9b7cd176ae3' => 
    array (
      0 => 'templates/plantillas/modulos/socios/panel.tpl',
      1 => 1507351297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169697925959b0286299c6b6-37358119',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b028629b7e96_63680081',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b028629b7e96_63680081')) {function content_59b028629b7e96_63680081($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Socios</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar / Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtNombre">Nombre</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtApellidos">Apellidos</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="txtApp" name="txtApp" placeholder="Paterno">
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="txtApm" name="txtApm" placeholder="Materno">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtEntidadFederativa">Entidad</label>
						<div class="col-sm-3">
							<select class="form-control" id="txtEntidadFederativa" name="txtEntidadFederativa">
							</select>
						</div>
						<label class="col-sm-3 control-label" for="txtMunicipio">Municipio</label>
						<div class="col-sm-3">
							<select class="form-control" id="txtMunicipio" name="txtMunicipio">
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtWhatsapp">Whatsapp</label>
						<div class="col-sm-9">
							<input type="tel" class="form-control" id="txtWhatsapp" name="txtWhatsapp">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtCorreo">Correo electrónico</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="txtCorreo" name="txtCorreo">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtPass">Contraseña</label>
						<div class="col-sm-9">
							<input type="password" class="form-control" id="txtPass" name="txtPass">
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/negocios/winMovimientos.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/socios/winDetalleMovimiento.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>