<?php /* Smarty version Smarty-3.1.11, created on 2017-09-21 20:11:45
         compiled from "templates/plantillas/modulos/reportes/admin/listaRegalias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168141611059b95a147497d1-56070670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a6d1d8b2bff44da163f4817cf4265cf116c5680' => 
    array (
      0 => 'templates/plantillas/modulos/reportes/admin/listaRegalias.tpl',
      1 => 1505350297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168141611059b95a147497d1-56070670',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b95a147aae91_16053786',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
    'tipo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b95a147aae91_16053786')) {function content_59b95a147aae91_16053786($_smarty_tpl) {?><div class="row">
	<div class="col-xs-12 col-sm-8">
		<div class="box">
			<div class="box-body">
				<table id="tblDatos" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Fecha</th>
							<th>Empresa</th>
							<th>Tipo</th>
							<th>Monto ($)</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['registro'];?>
</td>
								<td title="<?php if ($_smarty_tpl->tpl_vars['row']->value['plus']==1){?>Es una empresa plus<?php }?>" style="color: <?php if ($_smarty_tpl->tpl_vars['row']->value['plus']==1){?>green<?php }else{ ?>blue<?php }?>"><?php echo $_smarty_tpl->tpl_vars['row']->value['razonsocial'];?>
</td>
								<td style="color: <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['tipomovimiento'];?>
</td>
								<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['monto'];?>
</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-4">
		<div class="box">
			<div class="box-body">
				<table id="tblTipos" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Monto ($)</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
								<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['monto'];?>
</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>