<?php /* Smarty version Smarty-3.1.11, created on 2017-09-06 23:28:08
         compiled from "templates/plantillas/modulos/movimientos/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133051028559b0af8232f9c0-67832294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0ceb44e9124b6d3e2779092a6d431a19c05b0c8' => 
    array (
      0 => 'templates/plantillas/modulos/movimientos/lista.tpl',
      1 => 1504758486,
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
			<th>Monto</th>
			<th>Puntos</th>
			<th>&nbsp;</th>
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
				<td><b><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</b> <?php echo $_smarty_tpl->tpl_vars['row']->value['apellidos'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['monto'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['puntos'];?>
</td>
				<td style="text-align: right">
					<div class="btn-group btn-group-xs">
						<button type="button" class="btn btn-primary" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-edit"></i></button>
						<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" usuario="<?php echo $_smarty_tpl->tpl_vars['row']->value['idUsuario'];?>
"><i class="fa fa-times"></i></button>
					</div>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>