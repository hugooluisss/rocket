<?php /* Smarty version Smarty-3.1.11, created on 2017-09-21 20:11:44
         compiled from "templates/plantillas/modulos/reportes/admin/regalias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21969980159b954e5717103-36267475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f362543fc3a1ce4acff8eed97b3a6022ab89458' => 
    array (
      0 => 'templates/plantillas/modulos/reportes/admin/regalias.tpl',
      1 => 1505350297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21969980159b954e5717103-36267475',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b954e5735aa8_39802587',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b954e5735aa8_39802587')) {function content_59b954e5735aa8_39802587($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/rocket/librerias/smarty/plugins/modifier.date_format.php';
?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Regalías</h1>
	</div>
</div>

<div class="box">
	<div class="box-body">
		<div class="row">
			<div class="col-xs-2 col-md-2 text-right">
				<label for="txtInicio">Inicio</label>
			</div>
			<div class="col-xs-4 col-md-3">
				<input type="date" placeholder="Y-m-d" class="form-control" id="txtInicio" name="txtInicio" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" readonly/>
			</div>
			<div class="col-xs-2 col-md-2 col-md-offset-1 text-right">
				<label for="txtFin">Fin</label>
			</div>
			<div class="col-xs-4 col-md-3">
				<input type="date" placeholder="Y-m-d" class="form-control" id="txtFin" name="txtFin" value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" readonly/>
			</div>
		</div>
	</div>
</div>

<div id="dvRegalias"></div><?php }} ?>