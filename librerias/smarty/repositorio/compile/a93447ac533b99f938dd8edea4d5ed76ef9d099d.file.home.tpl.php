<?php /* Smarty version Smarty-3.1.11, created on 2017-09-07 13:35:17
         compiled from "templates/plantillas/modulos/front-end/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77081072459b190e0813987-16629338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a93447ac533b99f938dd8edea4d5ed76ef9d099d' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/home.tpl',
      1 => 1504809317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77081072459b190e0813987-16629338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b190e088cba1_62538113',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b190e088cba1_62538113')) {function content_59b190e088cba1_62538113($_smarty_tpl) {?><div class="headPrincipal">
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/front-end/encabezado.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="container">
		<div class="beneficios">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h2>REGISTRATE TOTALMENTE GRATIS</h2>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
1.png" />
					<p class="descripcion"><span class="text-danger">Realiza</span> compras en Negocios Afiliados</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
2.png" />
					<p class="descripcion"><span class="text-danger">Acumula</span> dinero electrónico</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
3.png" />
					<p class="descripcion"><span class="text-danger">Canjealo</span> por dinero en efectivo</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
4.png" />
					<p class="descripcion"><span class="text-danger">Utilízalo</span> para realizar más compras</p>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>