<?php /* Smarty version Smarty-3.1.11, created on 2017-10-08 17:31:10
         compiled from "templates/plantillas/modulos/negocios/winDetalleMovimiento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78709533259cc6c11564ed0-03641804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bd7a25fa4b90242e5e4220a1f37f03432394608' => 
    array (
      0 => 'templates/plantillas/modulos/negocios/winDetalleMovimiento.tpl',
      1 => 1507501868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78709533259cc6c11564ed0-03641804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59cc6c11568e05_06481537',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cc6c11568e05_06481537')) {function content_59cc6c11568e05_06481537($_smarty_tpl) {?><div id="winDetalleMovimiento" class="modal fade" role="dialog" usuario="">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Detalle del movimiento</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<label class="col-xs-5 control-label">Movimiento</label>
					<div class="col-xs-7" campo="idMovimiento"></div>
				</div>
				<div class="row">
					<label class="col-xs-5 control-label">Registrado el</label>
					<div class="col-xs-7" campo="registro"></div>
				</div>
				<div class="row">
					<label class="col-xs-5 control-label">Tipo</label>
					<div class="col-xs-7" campo="tipomovimiento"></div>
				</div>
				<div class="row">
					<label class="col-xs-5 control-label">Efectivo cobrado</label>
					<div class="col-xs-7" campo="efectivo"></div>
				</div>
				<div class="row">
					<label class="col-xs-5 control-label">Rocket Points recibidos</label>
					<div class="col-xs-7" campo="rocketpoints"></div>
				</div>
				<div class="row">
					<label class="col-xs-5 control-label">Puntos acumulados</label>
					<div class="col-xs-7" campo="puntos"></div>
				</div>
				<div class="row">
					<label class="col-xs-5 control-label">Regalias</label>
					<div class="col-xs-7" campo="regalias"></div>
				</div>
				<div class="row">
					<label class="col-xs-5 control-label">Socio</label>
					<div class="col-xs-7" campo="socio"></div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div><?php }} ?>