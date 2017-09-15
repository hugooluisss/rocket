<?php /* Smarty version Smarty-3.1.11, created on 2017-09-15 13:41:38
         compiled from "templates/plantillas/modulos/front-end/misBeneficios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150417869159b1944e00fab9-41899393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70e93e7521e2a3a1cca16aa2fd3c7881f75360f4' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/misBeneficios.tpl',
      1 => 1505136596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150417869159b1944e00fab9-41899393',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b1944e0b2b80_66308539',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b1944e0b2b80_66308539')) {function content_59b1944e0b2b80_66308539($_smarty_tpl) {?><div class="headPrincipal">
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/front-end/encabezado.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="container">
		<div class="beneficios">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h2>Beneficios de ser un socio de Rocket Card</h2>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
ahorro.png" data-toggle="modal" data-target="#winAhorra"/>
					<p class="descripcion"><span class="text-danger">Ahorra</span> realizando tus compras cotidianas</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
promociones.png" data-toggle="modal" data-target="#winPromociones"/>
					<p class="descripcion"><span class="text-danger">Recibe</span> promociones exclusivas</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
premios.png" data-toggle="modal" data-target="#winParticipa"/>
					<p class="descripcion"><span class="text-danger">Participa</span> para obtener premios</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
compras.png" data-toggle="modal" data-target="#winCompras"/>
					<p class="descripcion"><span class="text-danger">Utiliza</span> Rocket Card como cuenta de ahorro</p>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="winAhorra" class="modal fade" role="dialog" usuario="">
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
ahorro.png"/>
					</div>
					<div class="col-xs-12 col-sm-6">
						<h3><span class="text-danger">Ahorra</span> realizando tus compras cotidianas</h3>
						<br />
						<p>Elije los negocios afiliados para realizar tus consumos y recibe Rocket Points (cada uno equivale a $1.00) por cada compra que realices</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="winPromociones" class="modal fade" role="dialog" usuario="">
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
promociones.png"/>
					</div>
					<div class="col-xs-12 col-sm-6">
						<h3><span class="text-danger">Recibe</span> promociones exclusivas</h3>
						<br />
						<p>Al ser un socio Rocket Card los establecimientos afiliados te otorgarán descuentos únicos y exclusivos a los que solo tú puedes acceder</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="winParticipa" class="modal fade" role="dialog" usuario="">
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
premios.png"/>
					</div>
					<div class="col-xs-12 col-sm-6">
						<h3><span class="text-danger">Participa</span> para obtener premios</h3>
						<br />
						<p>Podrás participar para ganar premios que se otorgarán a la comunidad de socios Rocket Card totalmente gratis</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="winCompras" class="modal fade" role="dialog" usuario="">
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
compras.png"/>
					</div>
					<div class="col-xs-12 col-sm-6">
						<h3><span class="text-danger">Utiliza</span> Rocket Card como cuenta de ahorro</h3>
						<br />
						<p>Podrás participar para ganar premios que se otorgarán a la comunidad de socios Rocket Card totalmente gratis</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>