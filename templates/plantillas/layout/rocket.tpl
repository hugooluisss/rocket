<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>.:: {$PAGE.empresaAcronimo} ::.</title>
		<base href="{$PAGE.url}index.php" target="_top">
		
		<link rel="stylesheet" href="{$PAGE.ruta}dist/css/font-awesome.min.css">
		<link rel="stylesheet" href="{$PAGE.ruta}dist/css/ionicons.min.css">
		
		{if $PAGE.debug}
			<link rel="stylesheet/less" type="text/css" href="{$PAGE.ruta}rocket/style.less" />
		{else}
			<!--<link rel="stylesheet" href="{$PAGE.ruta}dist/css/AdminLTE.css">
			<link rel="stylesheet" type="text/css" href="{$PAGE.ruta}dist/css/skins/_all-skins.css" />
			-->
			<link rel="stylesheet" type="text/css" href="{$PAGE.ruta}rocket/style.css"/>
		{/if}
		
		<link rel="stylesheet" href="{$PAGE.ruta}bootstrap/css/bootstrap.min.css">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">
		
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
	<body>
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
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				
					<span class="sr-only">Desplegar navegación</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img src="{$PAGE.imagenes}logo.png" />
				</a>
			</div>
			
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="inicio">¿Como funciona?</a></li>
					<li><a href="misbeneficios">Mis beneficios</a></li>
					<li><a href="marcasafiliadas">Marcas afiliadas</a></li>
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
		{if $PAGE.vista neq ''}
			{include file=$PAGE.vista}
		{/if}
		</div>
		{include file=$PAGE.rutaModulos|cat:"modulos/usuarios/registro.tpl"}
		{include file=$PAGE.rutaModulos|cat:"modulos/usuarios/loginNegocio.tpl"}
		
		
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<img src="{$PAGE.imagenes}logo.png" />
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
	    <script src="{$PAGE.ruta}plugins/jQuery/jQuery-2.1.4.min.js"></script>
	    <!-- jQuery UI 1.11.4 -->
	    <script src="{$PAGE.ruta}plugins/jQueryUI/jquery-ui.min.js"></script>
	    <link rel="stylesheet" href="{$PAGE.ruta}plugins/jQueryUI/jquery-ui.css">
	    <!-- Bootstrap 3.3.5 -->
	    <script src="{$PAGE.ruta}bootstrap/js/bootstrap.min.js"></script>
	    
	    <script type="text/javascript" src="{$PAGE.ruta}plugins/validate/validate.es.js"></script>
	    <script type="text/javascript" src="{$PAGE.ruta}plugins/validate/validate.js"></script>
	    
	    {foreach from=$PAGE.scriptsJS item=script}
			<script type="text/javascript" src="{$script}?m={rand()}"></script>
		{/foreach}
	
	    {if $PAGE.debug}
	    	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js" type="text/javascript"></script>
	    {/if}
	</body>
</html>