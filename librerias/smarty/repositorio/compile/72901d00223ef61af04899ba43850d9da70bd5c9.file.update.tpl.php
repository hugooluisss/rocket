<?php /* Smarty version Smarty-3.1.11, created on 2017-08-24 09:05:41
         compiled from "templates/plantillas/layout/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2128032721599edd3507cc20-85725668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72901d00223ef61af04899ba43850d9da70bd5c9' => 
    array (
      0 => 'templates/plantillas/layout/update.tpl',
      1 => 1503582501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2128032721599edd3507cc20-85725668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_599edd350a8399_43813111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599edd350a8399_43813111')) {function content_599edd350a8399_43813111($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['PAGE']->value['vista']!=''){?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['PAGE']->value['vista'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>