<?php /* Smarty version Smarty-3.1.11, created on 2017-10-05 19:34:38
         compiled from "templates/plantillas/modulos/negocios/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56730445759aede7ba4f772-24284208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48918c57ef0f09974563ee45d4bca1d9f4a2b77b' => 
    array (
      0 => 'templates/plantillas/modulos/negocios/panel.tpl',
      1 => 1507127434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56730445759aede7ba4f772-24284208',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59aede7bab4bc2_83626769',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aede7bab4bc2_83626769')) {function content_59aede7bab4bc2_83626769($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Negocios</h1>
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
						<label class="col-sm-3 control-label" for="txtRazonSocial">Razón social</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtRazonSocial" name="txtRazonSocial">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtGiro">Giro del negocio</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtGiro" name="txtGiro">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtContacto">Contacto</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-4 col-sm-offset-3">
							<input type="text" class="form-control" id="txtApp" name="txtApp" placeholder="Apellido paterno">
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="txtApm" name="txtApm" placeholder="Apellido materno">
						</div>
					</div>
					<hr />
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtRFC">RFC</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtRFC" name="txtRFC">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtCalle">Calle y número</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="txtCalle" name="txtCalle" placeholder="Calle">
						</div>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="txtNumero" name="txtNumero" placeholder="Número">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtColonia">Colonia</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txtColonia" name="txtColonia">
						</div>
						<label class="col-sm-3 control-label" for="txtCodigoPostal">Código Postal</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txtCodigoPostal" name="txtCodigoPostal">
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
						<label class="col-sm-3 control-label" for="txtLocalidad">Localidad</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txtLocalidad" name="txtLocalidad">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtTelefono">Telefono</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="txtTelefono" name="txtTelefono">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtCorreo">Correo</label>
						<div class="col-sm-3">
							<input type="email" class="form-control" id="txtCorreo" name="txtCorreo">
						</div>
						<label class="col-sm-3 control-label" for="txtCorreo">Contraseña</label>
						<div class="col-sm-3">
							<input type="password" class="form-control" id="txtPass" name="txtPass">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="selPlus">¿Es negocio plus?</label>
						<div class="col-sm-2">
							<select id="selPlus" name="selPlus" class="form-control">
								<option value="1">Si</option>
								<option value="0">No</option>
							</select>
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

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/negocios/winComision.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/negocios/winMovimientos.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/negocios/winDetalleMovimiento.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>