<?php /* Smarty version Smarty-3.1.11, created on 2017-09-12 23:02:53
         compiled from "templates/plantillas/modulos/movimientos/winVenta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126370035359b0b1a0ec76d8-81990889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9111853366f9455e2a7889bbdf5230292c3b54a9' => 
    array (
      0 => 'templates/plantillas/modulos/movimientos/winVenta.tpl',
      1 => 1505275304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126370035359b0b1a0ec76d8-81990889',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b0b1a0ec9e15_62320181',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b0b1a0ec9e15_62320181')) {function content_59b0b1a0ec9e15_62320181($_smarty_tpl) {?><form role="form" id="frmVenta" class="form-horizontal" onsubmit="javascript: return false;">
	<div id="winVenta" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Registro de venta</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label class="col-xs-3 control-label" for="txtComision">Socio</label>
						<div class="col-xs-9">
							<input type="text" class="form-control socio" id="txtSocio" name="txtSocio" formulario="frmVenta" value="" placeholder="Número de tarjeta o correo electrónico">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-offset-3 col-xs-9">
							<input type="text" class="form-control" id="txtNombre" name="txtNombre" value="" placeholder="Nombre del cliente" disabled="true">
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-3 control-label" for="txtEfectivo">Efectivo</label>
						<div class="col-xs-5">
							<input type="text" class="form-control text-right" id="txtEfectivo" name="txtEfectivo" value="0">
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-3 control-label" for="txtComision">Puntos</label>
						<div class="col-xs-5">
							<input type="text" class="form-control text-right" id="txtPuntos" name="txtPuntos" value="0">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<input type="hidden" id="socio" name="socio" />
					<input type="hidden" id="puntos" name="puntos" />
				</div>
			</div>
		</div>
	</div>
</form><?php }} ?>