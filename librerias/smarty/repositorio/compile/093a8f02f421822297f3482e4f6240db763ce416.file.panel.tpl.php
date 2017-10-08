<?php /* Smarty version Smarty-3.1.11, created on 2017-10-06 23:56:28
         compiled from "templates/plantillas/modulos/movimientos/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124369857659b09ffbd7b215-00029725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '093a8f02f421822297f3482e4f6240db763ce416' => 
    array (
      0 => 'templates/plantillas/modulos/movimientos/panel.tpl',
      1 => 1507352184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124369857659b09ffbd7b215-00029725',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b09ffbdc6c93_93681576',
  'variables' => 
  array (
    'esPlus' => 0,
    'saldo' => 0,
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b09ffbdc6c93_93681576')) {function content_59b09ffbdc6c93_93681576($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Movimientos</h1>
	</div>
</div>
<div class="row">
	<div class="col-xs-6 col-md-3">
		<button class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#winVenta">Registrar venta</button>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['esPlus']->value){?>
	<div class="col-xs-6 col-md-3">
		<button class="btn btn-lg btn-danger btn-block" data-toggle="modal" data-target="#winCanje">Canjear puntos por efectivo</button>
	</div>
	<?php }?>
</div>
<div class="row">
	<div class="col-sm-4 col-sm-offset-8">
		<div class="alert alert-success">
			Saldo actual <b>$ <span id="dvSaldo"><?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>
</span></b>
		</div>
	</div>
</div>
<br />

<div class="box">
	<div class="box-body" id="dvLista">
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/movimientos/winVenta.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/movimientos/winCanje.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>