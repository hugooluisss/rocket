<?php /* Smarty version Smarty-3.1.11, created on 2017-09-12 22:46:56
         compiled from "templates/plantillas/modulos/negocios/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105764173159aee0e7e7c324-95197605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbb76b85ffc3ee5e89095865b7b39970477f116c' => 
    array (
      0 => 'templates/plantillas/modulos/negocios/lista.tpl',
      1 => 1505274414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105764173159aee0e7e7c324-95197605',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59aee0e7ec3894_46012253',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aee0e7ec3894_46012253')) {function content_59aee0e7ec3894_46012253($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Razón Social</th>
					<th>Contacto</th>
					<th>Correo</th>
					<th>Comisión</th>
					<th>Saldo ($)</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr title="<?php if ($_smarty_tpl->tpl_vars['row']->value['plus']==1){?>Es una empresa plus<?php }?>">
						<td style="border-left: 3px solid <?php if ($_smarty_tpl->tpl_vars['row']->value['plus']==1){?>green<?php }else{ ?>blue<?php }?>"><?php echo $_smarty_tpl->tpl_vars['row']->value['razonsocial'];?>
</td>
						<td><b><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</b> <?php echo $_smarty_tpl->tpl_vars['row']->value['apellidos'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['correo'];?>
</td>
						<td class="text-center">
							<button type="button" class="btn btn-primary btn-block btn-xs" action="comision" title="Comisiones" identificador='<?php echo $_smarty_tpl->tpl_vars['row']->value['idUsuario'];?>
' data-toggle="modal" data-target="#winComisiones"><?php echo $_smarty_tpl->tpl_vars['row']->value['comision'];?>
 %</button>
						</td>
						<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['saldo'];?>
</td>
						<td class="text-right">
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