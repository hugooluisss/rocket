<?php /* Smarty version Smarty-3.1.11, created on 2017-10-08 15:02:09
         compiled from "templates/plantillas/modulos/movimientos/listaNegocios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155767713459cc699e6bd893-87306569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd24fc5af43c23fbcdf91790206fea1aa2493e2d' => 
    array (
      0 => 'templates/plantillas/modulos/movimientos/listaNegocios.tpl',
      1 => 1507492926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155767713459cc699e6bd893-87306569',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59cc699e78e329_65684315',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
    'comision' => 0,
    'regalias' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cc699e78e329_65684315')) {function content_59cc699e78e329_65684315($_smarty_tpl) {?><table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Fecha</th>
			<th>Tipo</th>
			<th>Socio</th>
			<th>Efectivo</th>
			<th>RP Cobrados</th>
			<th>RP Entregados</th>
			<th>Comisión Generada</th>
			<th>Regalias</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['socio'];?>
</td>
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['efectivo'];?>
</td>
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['rocketpoints'];?>
</td>
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['puntos'];?>
</td>
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['comision'];?>
</td>
				<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['regalias'];?>
</td>
			</tr>
		<?php } ?>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="6" class="text-right">Total</td>
			<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['comision']->value;?>
</td>
			<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['regalias']->value;?>
</td>
		</tr>
	</tfoot>
</table><?php }} ?>