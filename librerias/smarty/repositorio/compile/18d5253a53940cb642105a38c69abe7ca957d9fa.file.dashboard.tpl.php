<?php /* Smarty version Smarty-3.1.11, created on 2017-09-23 23:23:30
         compiled from "templates/plantillas/modulos/socios/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67473153759b816ba66a818-06426694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18d5253a53940cb642105a38c69abe7ca957d9fa' => 
    array (
      0 => 'templates/plantillas/modulos/socios/dashboard.tpl',
      1 => 1506226975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67473153759b816ba66a818-06426694',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b816ba66b4d2_71919219',
  'variables' => 
  array (
    'PAGE' => 0,
    'socio' => 0,
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b816ba66b4d2_71919219')) {function content_59b816ba66b4d2_71919219($_smarty_tpl) {?><br />
<div class="row">
	<div class="col-xs-12 col-sm-6">
		<h3>Bienvenido <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getNombre();?>
 <?php echo $_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getApp();?>
 <?php echo $_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getApm();?>
</span></h3>
	</div>
</div>

<div class="row">
	<div class="col-xs-6">
		<div class="box">
			<div class="box-body">
				Actualmente tienes un saldo de <span class="text-danger"><b><?php echo $_smarty_tpl->tpl_vars['socio']->value->getPuntos();?>
 Puntos Rocket</b></span>
			</div>
		</div>
	</div>
	<div class="col-xs-6">
		<div class="box">
			<div class="box-body text-right">
				<a href="logout">Salir <i class="fa fa-sign-out" aria-hidden="true"></i></a>
				<br />
				<a href="#" data-toggle="modal" data-target="#winPerfil">Mi perfil de socio <i class="fa fa-user" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-body">
				<table id="tblDatos" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Fecha</th>
							<th>Tipo</th>
							<th>Negocio</th>
							<th>Pago</th>
							<th>Puntos obtenidos</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
							<tr {}>
								<td style="border-left: 5px solid <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['registro'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tipo'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['negocio'];?>
</td>
								<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['monto'];?>
</td>
								<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['puntos'];?>
</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<form role="form" id="frmSocioUpdate" class="form-horizontal" onsubmit="javascript: return false;">
	<div id="winPerfil" class="modal fade" role="dialog" usuario="">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Mi perfil de socio</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtNombre">Nombre</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txtNombre" name="txtNombre" value="<?php echo $_smarty_tpl->tpl_vars['socio']->value->getNombre();?>
">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtApellidos">Apellidos</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="txtApp" name="txtApp" placeholder="Paterno" value="<?php echo $_smarty_tpl->tpl_vars['socio']->value->getApp();?>
">
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="txtApm" name="txtApm" placeholder="Materno" value="<?php echo $_smarty_tpl->tpl_vars['socio']->value->getApm();?>
">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtEntidadFederativa">Entidad federativa</label>
						<div class="col-sm-9">
							<select class="form-control" id="txtEntidadFederativa" name="txtEntidadFederativa" valor="<?php echo $_smarty_tpl->tpl_vars['socio']->value->getEntidadFederativa();?>
">
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtMunicipio">Municipio</label>
						<div class="col-sm-9">
							<select class="form-control" id="txtMunicipio" name="txtMunicipio" valor="<?php echo $_smarty_tpl->tpl_vars['socio']->value->getMunicipio();?>
">
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtWhatsapp">Whatsapp</label>
						<div class="col-sm-9">
							<input type="tel" class="form-control" id="txtWhatsapp" name="txtWhatsapp" value="<?php echo $_smarty_tpl->tpl_vars['socio']->value->getWhatsapp();?>
">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtCorreo">Correo electrónico</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="txtCorreo" name="txtCorreo" value="<?php echo $_smarty_tpl->tpl_vars['socio']->value->getCorreo();?>
">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtPass">Contraseña</label>
						<div class="col-sm-9">
							<input type="password" class="form-control" id="txtPass" name="txtPass">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['socio']->value->getId();?>
" />
				</div>
			</div>
		</div>
	</div>
</form><?php }} ?>