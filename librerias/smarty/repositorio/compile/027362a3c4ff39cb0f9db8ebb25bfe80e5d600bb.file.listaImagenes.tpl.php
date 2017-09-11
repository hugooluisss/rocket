<?php /* Smarty version Smarty-3.1.11, created on 2017-09-10 22:11:30
         compiled from "templates/plantillas/modulos/negocios/listaImagenes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31109985059b182651d62b4-25253977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '027362a3c4ff39cb0f9db8ebb25bfe80e5d600bb' => 
    array (
      0 => 'templates/plantillas/modulos/negocios/listaImagenes.tpl',
      1 => 1504811282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31109985059b182651d62b4-25253977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b182653b1ad1_46315294',
  'variables' => 
  array (
    'imagenes' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b182653b1ad1_46315294')) {function content_59b182653b1ad1_46315294($_smarty_tpl) {?><div class="row">
<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
	<div class="col-xs-6 col-sm-4 col-md-3">
		<img src="<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" class="img-responsive"/>
	</div>
<?php }
if (!$_smarty_tpl->tpl_vars["row"]->_loop) {
?>
	<div class="col-xs-12">No se han agregado imágenes a la galería</div>
<?php } ?>
</div><?php }} ?>