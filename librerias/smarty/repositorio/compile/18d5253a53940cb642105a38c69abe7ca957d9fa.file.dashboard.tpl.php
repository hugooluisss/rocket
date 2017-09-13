<?php /* Smarty version Smarty-3.1.11, created on 2017-09-12 22:08:15
         compiled from "templates/plantillas/modulos/socios/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67473153759b816ba66a818-06426694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18d5253a53940cb642105a38c69abe7ca957d9fa' => 
    array (
      0 => 'templates/plantillas/modulos/socios/dashboard.tpl',
      1 => 1505242912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67473153759b816ba66a818-06426694',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b816ba66b4d2_71919219',
  'variables' => 
  array (
    'PAGE' => 0,
    'socio' => 0,
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b816ba66b4d2_71919219')) {function content_59b816ba66b4d2_71919219($_smarty_tpl) {?><br />
<div class="row">
	<div class="col-xs-12 col-sm-6">
		<h3>Bienvenido <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getNombre();?>
 <?php echo $_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getApellidos();?>
</span></h3>
	</div>
</div>

<div class="row">
	<div class="col-xs-6">
		<div class="box">
			<div class="box-body">
				Actualmente tienes un saldo de <span class="text-danger"><b><?php echo $_smarty_tpl->tpl_vars['socio']->value->getPuntos();?>
 Puntos Rocket</b></span>
			</div>
		</div>
	</div>
	<div class="col-xs-6">
		<div class="box">
			<div class="box-body text-right">
				<a href="logout">Salir <i class="fa fa-sign-out" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-body">
				<table id="tblDatos" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Fecha</th>
							<th>Tipo</th>
							<th>Negocio</th>
							<th>Pago</th>
							<th>Puntos obtenidos</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
							<tr {}>
								<td style="border-left: 5px solid <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['registro'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['tipo'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['negocio'];?>
</td>
								<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['monto'];?>
</td>
								<td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['puntos'];?>
</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>