<?php /* Smarty version Smarty-3.1.11, created on 2017-09-23 10:39:26
         compiled from "templates/plantillas/layout/rocket.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10575565359a0e9dd645a93-79600797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '956749a10a45175b89ff33faade5ab0f5da760e0' => 
    array (
      0 => 'templates/plantillas/layout/rocket.tpl',
      1 => 1506181165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10575565359a0e9dd645a93-79600797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59a0e9dd823f75_36588293',
  'variables' => 
  array (
    'PAGE' => 0,
    'script' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a0e9dd823f75_36588293')) {function content_59a0e9dd823f75_36588293($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>.:: <?php echo $_smarty_tpl->tpl_vars['PAGE']->value['empresaAcronimo'];?>
 ::.</title>
		<base href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['url'];?>
index.php" target="_top">
		
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
dist/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
dist/css/ionicons.min.css">
		
		<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['debug']){?>
			<link rel="stylesheet/less" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
rocket/style.less" />
		<?php }else{ ?>
			<!--<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
dist/css/AdminLTE.css">
			<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
dist/css/skins/_all-skins.css" />
			-->
			<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
rocket/style.css"/>
		<?php }?>
		
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
bootstrap/css/bootstrap.min.css">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<header>
				<div class="busqueda">
					<div class="contactanos">
						<a href="contactanos">CONTÁCTANOS</a>
					</div>
					<div class="buscar hidden-xs">
						<div class="input-group">
							<input id="txtBuscarEmpresa" name="txtBuscarEmpresa" type="text" class="form-control" placeholder="Buscar">
							<span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
						</div>
					</div>
				</div>
			</header>
		<nav class="navbar navbar-default" data-spy="affix" data-offset-top="70">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				
					<span class="sr-only">Desplegar navegación</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
logo.png" />
				</a>
			</div>
			
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="#dvComoFunciona">¿Como funciona?</a></li>
					<li><a href="#dvMisBeneficios">Mis beneficios</a></li>
					<li class="<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['modulo']=="brands"){?>active<?php }?>"><a href="brands">Marcas afiliadas</a></li>
					<li><a href="#" data-toggle="modal" data-target="#winRegistro">Registrate gratis</a></li>
					<li><a href="#" data-toggle="modal" data-target="#winNegocioLogin">Ingresa</a></li>
					<br />
					<li class="visible-xs">
						<div class="input-group">
							<input id="txtBuscarEmpresa2" name="txtBuscar2" type="text" class="form-control" placeholder="Buscar negocio">
							<span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		
		<div class="contenido">
		<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['vista']!=''){?>
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['PAGE']->value['vista'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/usuarios/registro.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/usuarios/loginNegocio.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['imagenes'];?>
logo.png" />
					</div>
					<div class="col-sm-3">
						<ul class="">
							<li><a href="inicio">¿Como funciona?</a></li>
							<li><a href="misbeneficios">Mis beneficios</a></li>
							<li><a href="marcasafiliadas">Marcas afiliadas</a></li>
							<li><a href="#" data-toggle="modal" data-target="#winRegistro">Registrate gratis</a></li>
							<li><a href="#" data-toggle="modal" data-target="#winNegocioLogin">Ingresa</a></li>
						</ul>
					</div>
					<div class="col-sm-3">
						<ul class="">
							<li><a href="terminoscondiciones">Términos y condiciones</a></li>
							<li><a href="avisoprivacidad">Aviso legal y de privacidad</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		
		<!-- jQuery 2.1.4 -->
	    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/jQuery/jQuery-2.1.4.min.js"></script>
	    <!-- jQuery UI 1.11.4 -->
	    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/jQueryUI/jquery-ui.min.js"></script>
	    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/jQueryUI/jquery-ui.css">
	    <!-- Bootstrap 3.3.5 -->
	    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
bootstrap/js/bootstrap.min.js"></script>
	    
	    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/validate/validate.es.js"></script>
	    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/validate/validate.js"></script>
	    
	    <?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['script']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PAGE']->value['scriptsJS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
$_smarty_tpl->tpl_vars['script']->_loop = true;
?>
			<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
?m=<?php echo rand();?>
"></script>
		<?php } ?>
	
	    <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['debug']){?>
	    	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js" type="text/javascript"></script>
	    <?php }?>
	</body>
</html><?php }} ?>