<?php /* Smarty version Smarty-3.1.11, created on 2017-09-07 12:49:05
         compiled from "templates/plantillas/modulos/negocios/winComision.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75582359859b04219cc38d9-92644408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65c57d4673c87dcb894757b2bc4bb615dcd29c02' => 
    array (
      0 => 'templates/plantillas/modulos/negocios/winComision.tpl',
      1 => 1504795812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75582359859b04219cc38d9-92644408',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b04219d28456_57217190',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b04219d28456_57217190')) {function content_59b04219d28456_57217190($_smarty_tpl) {?><form role="form" id="frmComision" class="form-horizontal" onsubmit="javascript: return false;">
	<div id="winComisiones" class="modal fade" role="dialog" usuario="">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Comisiones</h4>
				</div>
				<div class="modal-body">
					<div class="alert alert-info">
						Las comisiónes son aplicadas 24 horas después de su aplicación
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="txtComision">Nueva comisión</label>
						<div class="col-sm-3">
							<div class="input-group">
								<input type="number" class="form-control" id="txtComision" name="txtComision" value="0">
								<span class="input-group-addon" id="basic-addon1">%</span>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>
		</div>
	</div>
</form><?php }} ?>