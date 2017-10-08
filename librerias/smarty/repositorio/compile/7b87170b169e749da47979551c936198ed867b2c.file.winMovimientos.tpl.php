<?php /* Smarty version Smarty-3.1.11, created on 2017-10-07 00:28:51
         compiled from "templates/plantillas/modulos/negocios/winMovimientos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164268435259cc569a1b33d2-36044835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b87170b169e749da47979551c936198ed867b2c' => 
    array (
      0 => 'templates/plantillas/modulos/negocios/winMovimientos.tpl',
      1 => 1507354128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164268435259cc569a1b33d2-36044835',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59cc569a1b7427_83176686',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cc569a1b7427_83176686')) {function content_59cc569a1b7427_83176686($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/rocket/librerias/smarty/plugins/modifier.date_format.php';
?><div id="winMovimientos" class="modal fade" role="dialog" usuario="">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Movimientos</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label class="col-sm-3 control-label" for="txtInicio">Inicio</label>
					<div class="col-sm-3">
						<div class="input-group">
							<input type="text" class="form-control setFechas" id="txtInicio" name="txtInicio" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" readonly="true">
						</div>
					</div>
					<label class="col-sm-3 control-label" for="txtFin">Fin</label>
					<div class="col-sm-3">
						<div class="input-group">
							<input type="text" class="form-control setFechas" id="txtFin" name="txtFin" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" readonly="true">
						</div>
					</div>
				</div>
				<br />
				<button id="btnEstadoCuenta" class="btn btn-primary btn-xs">PDF</button>
				<br />
				<br />
				<div class="dvMovimientos">
				
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div><?php }} ?>