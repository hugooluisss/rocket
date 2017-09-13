<?php /* Smarty version Smarty-3.1.11, created on 2017-09-12 23:02:53
         compiled from "templates/plantillas/modulos/movimientos/winCanje.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24673203159b165464e2388-75450611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '911032bd17531e2d3f09df3a0ca38f1c865837eb' => 
    array (
      0 => 'templates/plantillas/modulos/movimientos/winCanje.tpl',
      1 => 1505275302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24673203159b165464e2388-75450611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b165464e4068_55077212',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b165464e4068_55077212')) {function content_59b165464e4068_55077212($_smarty_tpl) {?><form role="form" id="frmCanje" class="form-horizontal" onsubmit="javascript: return false;">
	<div id="winCanje" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Canje de puntos</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label class="col-xs-3 control-label" for="txtComision">Socio</label>
						<div class="col-xs-9">
							<input type="text" class="form-control socio" id="txtSocio" name="txtSocio" formulario="frmCanje" value="" placeholder="Número de tarjeta o correo electrónico">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-offset-3 col-xs-9">
							<input type="text" class="form-control" id="txtNombre" name="txtNombre" value="" placeholder="Nombre del cliente" disabled="true">
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