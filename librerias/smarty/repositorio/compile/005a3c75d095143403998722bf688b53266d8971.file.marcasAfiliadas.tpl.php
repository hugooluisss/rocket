<?php /* Smarty version Smarty-3.1.11, created on 2017-09-15 14:14:42
         compiled from "templates/plantillas/modulos/front-end/marcasAfiliadas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13295301159b1fb9e9c4b07-53153527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '005a3c75d095143403998722bf688b53266d8971' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/marcasAfiliadas.tpl',
      1 => 1505502874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13295301159b1fb9e9c4b07-53153527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59b1fb9e9c5868_31605300',
  'variables' => 
  array (
    'negocios' => 0,
    'negocio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b1fb9e9c5868_31605300')) {function content_59b1fb9e9c5868_31605300($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-xs-12 text-center">
			<h2>Beneficios de ser un socio de Rocket Card</h2>
		</div>
	</div>
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars["negocio"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["negocio"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['negocios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["negocio"]->key => $_smarty_tpl->tpl_vars["negocio"]->value){
$_smarty_tpl->tpl_vars["negocio"]->_loop = true;
?>
			<div class="col-xs-6 col-sm-4 col-md-3">
				<div class="negocioAfiliado" style="background: url('<?php echo $_smarty_tpl->tpl_vars['negocio']->value['logotipo'];?>
')" title="Haz click/tap sobre la imagen para ver la información completa" datos='<?php echo $_smarty_tpl->tpl_vars['negocio']->value['json'];?>
' data-toggle="modal" data-target="#winNegocio">
					<div>
						<p class="text-center titulo"><b><?php echo $_smarty_tpl->tpl_vars['negocio']->value['razonsocial'];?>
</b></p>
						<p class="text-center">Haz click para conocer el negocio</p>
					</div>
				</div>
		    </div>
	    <?php } ?>
	</div>
</div>


<div id="winNegocio" class="modal fade" role="dialog" usuario="">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" campo="razonsocial"></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12 text-center">
						<img class="imgNegocio" />
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 dvListaImagenes">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 text-danger"><b>Dirección</b></div>
					<div class="col-xs-8">
						<div campo="calle"></div>
						<div campo="colonia"></div>
						<div campo="codigopostal"></div>
						<div campo="localidad"></div>
						<div campo="municipio"></div>
						<div campo="entidadfederativa"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 text-danger"><b>Teléfono</b></div>
					<div class="col-xs-8" campo="telefono"></div>
				</div>
				<div class="row">
					<div class="col-xs-4 text-danger"><b>Correo electrónico</b></div>
					<div class="col-xs-8" campo="correo"></div>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>