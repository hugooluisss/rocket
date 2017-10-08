<?php /* Smarty version Smarty-3.1.11, created on 2017-09-27 23:47:47
         compiled from "templates/plantillas/modulos/front-end/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77081072459b190e0813987-16629338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a93447ac533b99f938dd8edea4d5ed76ef9d099d' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/home.tpl',
      1 => 1506573944,
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
		<div class="beneficios" id="dvComoFunciona">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h2>REGISTRATE TOTALMENTE GRATIS</h2>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
1.png" data-toggle="modal" data-target="#winRealiza"/>
					<p class="descripcion"><span class="text-danger">Realiza</span> compras en Negocios Afiliados</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
2.png" data-toggle="modal" data-target="#winAcumula"/>
					<p class="descripcion"><span class="text-danger">Acumula</span> dinero electrónico</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
4.png" data-toggle="modal" data-target="#winUtilizalo"/>
					<p class="descripcion"><span class="text-danger">Utilízalo</span> para realizar más compras</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
3.png" data-toggle="modal" data-target="#winCanjealo"/>
					<p class="descripcion"><span class="text-danger">Canjéalo</span> por dinero en efectivo</p>
				</div>
			</div>
		</div>
	</div>

	<div id="winRealiza" class="modal fade" role="dialog" usuario="">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					&nbsp;
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12 col-sm-6 text-center item">
							<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
1.png"/>
						</div>
						<div class="col-xs-12 col-sm-6">
							<h3><span class="text-danger">Realiza</span> compras en Negocios Afiliados</h3>
							<br />
							<p>Busca los establecimientos que tengan el cohete Rocket Card.</p>
							<p class="text-center"><a href="brands" class="btn btn-primary">Mira nuestros negocios afiliados</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="winAcumula" class="modal fade" role="dialog" usuario="">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					&nbsp;
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12 col-sm-6 text-center item">
							<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
2.png"/>
						</div>
						<div class="col-xs-12 col-sm-6">
							<h3><span class="text-danger">Acumula</span> dinero electrónico</h3>
							<br />
							<p>En las compras que realices recibirás un porcentaje de retorno que se verá reflejado en tu cuenta como Rocket Points, cada uno equivale a $1.00 m/n.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="winCanjealo" class="modal fade" role="dialog" usuario="">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					&nbsp;
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12 col-sm-6 text-center item">
							<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
3.png"/>
						</div>
						<div class="col-xs-12 col-sm-6">
							<h3><span class="text-danger">Canjealo</span> por dinero en efectivo</h3>
							<br />
							<p>En el momento que tengas <b>500 ROCKET POINTS</b> o más acumulados en tu cuenta puedes canjearlos por dinero en efectivo en los Negocios Plus.</p>
							<p class="text-center"><a href="brands" class="btn btn-primary">Mira nuestros negocios plus</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="winUtilizalo" class="modal fade" role="dialog" usuario="">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					&nbsp;
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12 col-sm-6 text-center item">
							<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
4.png"/>
						</div>
						<div class="col-xs-12 col-sm-6">
							<h3><span class="text-danger">Utilízalo</span> para realizar más compras</h3>
							<br />
							<p>Paga con tus Rocket Points en los establecimientos afiliados y sigue ganando.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/front-end/misBeneficios.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><?php }} ?>