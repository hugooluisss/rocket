<?php /* Smarty version Smarty-3.1.11, created on 2017-10-08 15:15:43
         compiled from "templates/plantillas/modulos/movimientos/listaSocios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40151760659d4e7bb350585-41478690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '504acd35305ff97831f6b31f04eb2187b74124ee' => 
    array (
      0 => 'templates/plantillas/modulos/movimientos/listaSocios.tpl',
      1 => 1507493740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40151760659d4e7bb350585-41478690',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59d4e7bb415460_54105497',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d4e7bb415460_54105497')) {function content_59d4e7bb415460_54105497($_smarty_tpl) {?><table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Fecha</th>
			<th>Tipo</th>
			<th>Negocio</th>
			<th>Efectivo</th>
			<th>Rocket Points</th>
			<th>Puntos</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr title="Click o Tap para ver el detalle" style="cursor: pointer" json='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'>
				<td style="border-left: 3px solid <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['registro'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tipomovimiento'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['negocio'];?>
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