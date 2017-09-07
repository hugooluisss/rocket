<?php /* Smarty version Smarty-3.1.11, created on 2017-09-06 18:32:07
         compiled from "templates/plantillas/layout/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167677872159aed647e38299-37281209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72901d00223ef61af04899ba43850d9da70bd5c9' => 
    array (
      0 => 'templates/plantillas/layout/update.tpl',
      1 => 1503601921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167677872159aed647e38299-37281209',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59aed647ed0217_25213516',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aed647ed0217_25213516')) {function content_59aed647ed0217_25213516($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['PAGE']->value['vista']!=''){?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['PAGE']->value['vista'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>