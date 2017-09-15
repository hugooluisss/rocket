<?php /* Smarty version Smarty-3.1.11, created on 2017-09-15 13:21:07
         compiled from "templates/plantillas/modulos/front-end/encabezado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84480610959b190e0891de0-77559280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97e9529d738f03552c7bffed1894a2923ab01b07' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/encabezado.tpl',
      1 => 1505499665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84480610959b190e0891de0-77559280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b190e08e4707_82134997',
  'variables' => 
  array (
    'archivosSlider' => 0,
    'key' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b190e08e4707_82134997')) {function content_59b190e08e4707_82134997($_smarty_tpl) {?><div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-3 text-center">
				<form id="frmLoginSocio" onsubmit="javascript: return false;" method="post">
					<div class="titulo">INGRESA A TU CUENTA</div>
					<br />
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-credit-card fa-inverse" aria-hidden="true"></i></span>
						<input id="txtTarjetaUser" name="txtTarjetaUser" type="text" class="form-control" placeholder="* Número de tarjeta">
					</div>
					<br />
					<div class="input-group">
						<span class="input-group-addon">&nbsp;<i class="fa fa-lock fa-inverse" aria-hidden="true"></i>&nbsp;</span>
						<input type="password" id="txtPassTarjeta" name="txtPassTarjeta" class="form-control" placeholder="* Contraseña">
					</div>
					<br />
					<button type="submit" class="btn btn-danger">INGRESAR</button>
					<button type="button" class="btn btn-link recuperarPass">Recuperar contraseña</button>
				</form>
			</div>
			<div class="col-sm-4 col-sm-offset-4 col-md-3 col-md-offset-6 text-center">
				<div id="carruselNegocios" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['archivosSlider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["row"]->key;
?>
							<li data-target="#carruselNegocios" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['key']->value==0){?>class="active"<?php }?>></li>
						<?php } ?>
					</ol>
					
					<div class="carousel-inner">
						<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['archivosSlider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["row"]->key;
?>
							<div class="item <?php if ($_smarty_tpl->tpl_vars['key']->value==0){?>active<?php }?>">
								<img src="<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" style="width:100%;">
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-sm-offset-3 descripcion text-center">
				SÉ UN SOCIO ROCKET CARD Y DESCUBRE QUE MIENTRAS MÁS COMPRAS, MÁS DINERO GANAS
			</div>
		</div>
	</div>
</div><?php }} ?>