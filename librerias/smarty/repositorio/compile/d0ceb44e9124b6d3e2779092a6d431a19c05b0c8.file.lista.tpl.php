<?php /* Smarty version Smarty-3.1.11, created on 2017-10-08 14:01:59
         compiled from "templates/plantillas/modulos/movimientos/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133051028559b0af8232f9c0-67832294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0ceb44e9124b6d3e2779092a6d431a19c05b0c8' => 
    array (
      0 => 'templates/plantillas/modulos/movimientos/lista.tpl',
      1 => 1507489315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133051028559b0af8232f9c0-67832294',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b0af823d5829_82515563',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b0af823d5829_82515563')) {function content_59b0af823d5829_82515563($_smarty_tpl) {?><table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Fecha</th>
			<th>Socio</th>
			<th>Tipo</th>
			<th>Efectivo</th>
			<th>Rocket Points</th>
			<th>Acumulados</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr title="<?php echo $_smarty_tpl->tpl_vars['row']->value['nombreTipo'];?>
">
				<td style="border-left: 3px solid <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['registro'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['socio'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombreTipo'];?>
</td>
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['efectivo'];?>
</td>
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['rocketpoints'];?>
</td>
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['puntos'];?>
</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>