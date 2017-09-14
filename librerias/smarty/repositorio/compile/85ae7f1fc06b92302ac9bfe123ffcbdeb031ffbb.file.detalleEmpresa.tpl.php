<?php /* Smarty version Smarty-3.1.11, created on 2017-09-13 22:18:47
         compiled from "templates/plantillas/modulos/front-end/detalleEmpresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81376204659b9f1545a3c38-82556793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85ae7f1fc06b92302ac9bfe123ffcbdeb031ffbb' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/detalleEmpresa.tpl',
      1 => 1505359126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81376204659b9f1545a3c38-82556793',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b9f1545a4da6_20631903',
  'variables' => 
  array (
    'negocio' => 0,
    'imagenes' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b9f1545a4da6_20631903')) {function content_59b9f1545a4da6_20631903($_smarty_tpl) {?><div class="container" id="winNegocio">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $_smarty_tpl->tpl_vars['negocio']->value->getRazonSocial();?>
</h1>
		</div>
	</div>
	<div class="row">
			<div class="col-xs-12 col-sm-6 text-center">
				<img class="imgNegocio img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['imagenes']->value[0];?>
"/>
				<br />
				<div class="col-xs-12 dvListaImagenes">
					<?php  $_smarty_tpl->tpl_vars["img"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["img"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["img"]->key => $_smarty_tpl->tpl_vars["img"]->value){
$_smarty_tpl->tpl_vars["img"]->_loop = true;
?>
						<img class="itemImagenNegocio" src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" />
					<?php } ?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="row">
					<div class="col-xs-4 text-danger"><b>Dirección</b></div>
					<div class="col-xs-8">
						<div><?php echo $_smarty_tpl->tpl_vars['negocio']->value->getCalle();?>
</div>
						<div><?php echo $_smarty_tpl->tpl_vars['negocio']->value->getColonia();?>
</div>
						<div><?php echo $_smarty_tpl->tpl_vars['negocio']->value->getCodigoPostal();?>
</div>
						<div><?php echo $_smarty_tpl->tpl_vars['negocio']->value->getLocalidad();?>
</div>
						<div><?php echo $_smarty_tpl->tpl_vars['negocio']->value->getMunicipio();?>
</div>
						<div><?php echo $_smarty_tpl->tpl_vars['negocio']->value->getEntidadFederativa();?>
</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 text-danger"><b>Teléfono</b></div>
					<div class="col-xs-8"><div><?php echo $_smarty_tpl->tpl_vars['negocio']->value->getTelefono();?>
</div></div>
				</div>
				<div class="row">
					<div class="col-xs-4 text-danger"><b>Correo electrónico</b></div>
					<div class="col-xs-8"><div><?php echo $_smarty_tpl->tpl_vars['negocio']->value->getCorreo();?>
</div></div>
				</div>
			</div>
		</div>
	</div>
</div>
<br /><br /><br /><?php }} ?>