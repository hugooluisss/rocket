<?php /* Smarty version Smarty-3.1.11, created on 2017-09-06 12:41:08
         compiled from "templates/plantillas/modulos/socios/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206663579059b0291624fe14-16536164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5f2e649fef534b321c6e382033484c5530be337' => 
    array (
      0 => 'templates/plantillas/modulos/socios/lista.tpl',
      1 => 1504719663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206663579059b0291624fe14-16536164',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b029162f4127_44713472',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b029162f4127_44713472')) {function content_59b029162f4127_44713472($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Nombre completo</th>
					<th>Correo</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr>
						<td><b><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</b> <?php echo $_smarty_tpl->tpl_vars['row']->value['apellidos'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['correo'];?>
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
		</table>
	</div>
</div><?php }} ?>