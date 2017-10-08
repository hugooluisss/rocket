<?php /* Smarty version Smarty-3.1.11, created on 2017-10-06 23:45:49
         compiled from "templates/plantillas/modulos/socios/winDetalleMovimiento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110990478359d4e95b1793d4-42451221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b777f98b17123b3c8eeccf98433876dc445a0fd7' => 
    array (
      0 => 'templates/plantillas/modulos/socios/winDetalleMovimiento.tpl',
      1 => 1507351548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110990478359d4e95b1793d4-42451221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59d4e95b17d1a8_30366368',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d4e95b17d1a8_30366368')) {function content_59d4e95b17d1a8_30366368($_smarty_tpl) {?><div id="winDetalleMovimiento" class="modal fade" role="dialog" usuario="">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Detalle del movimiento</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<label class="col-xs-3 control-label">Movimiento</label>
					<div class="col-xs-9" campo="idMovimiento"></div>
				</div>
				<div class="row">
					<label class="col-xs-3 control-label">Registrado el</label>
					<div class="col-xs-9" campo="registro"></div>
				</div>
				<div class="row">
					<label class="col-xs-3 control-label">Negocio</label>
					<div class="col-xs-9" campo="negocio"></div>
				</div>
				<div class="row">
					<label class="col-xs-3 control-label">Tipo</label>
					<div class="col-xs-9" campo="tipomovimiento"></div>
				</div>
				<div class="row">
					<label class="col-xs-3 control-label">Monto</label>
					<div class="col-xs-9" campo="monto"></div>
				</div>
				<div class="row">
					<label class="col-xs-3 control-label">Puntos</label>
					<div class="col-xs-9" campo="puntos"></div>
				</div>
				<div class="row">
					<label class="col-xs-3 control-label">Regalias</label>
					<div class="col-xs-9" campo="regalias"></div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div><?php }} ?>