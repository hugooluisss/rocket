<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>.:: {$PAGE.empresaAcronimo} ::.</title>
		<base href="{$PAGE.url}index.php" target="_top">
		<link rel="stylesheet" href="{$PAGE.ruta}bootstrap/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="{$PAGE.ruta}dist/css/font-awesome.min.css">
		<link rel="stylesheet" href="{$PAGE.ruta}dist/css/ionicons.min.css">
		
		{if $PAGE.debug}
			<link rel="stylesheet/less" type="text/css" href="{$PAGE.ruta}rocket/style.less" />
		{else}
			<link rel="stylesheet" href="{$PAGE.ruta}dist/css/AdminLTE.min.css">
			<link rel="stylesheet" type="text/css" href="{$PAGE.ruta}dist/css/skins/_all-skins.css" />
			<link rel="stylesheet" type="text/css" href="{$PAGE.ruta}rocket/style.css" />
		{/if}
		
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
					CONTÁCTANOS
				</div>
				<div class="buscar hidden-xs">
					<div class="input-group">
						<input id="txtTarjeta" name="txtTarjeta" type="text" class="form-control" placeholder="Buscar">
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
					<li><a href="#">¿Como funciona?</a></li>
					<li><a href="#">Mis beneficios</a></li>
					<li><a href="#">Marcas afiliadas</a></li>
					<li><a href="#">Registrate gratis</a></li>
					<li><a href="#">Ingresa</a></li>
				</ul>
			</div>
		</nav>
		<div class="headPrincipal">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-3 text-center">
						<form id="frmLoginCliente">
							<div class="titulo">INGRESA A TU CUENTA</div>
							<br />
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-credit-card fa-inverse" aria-hidden="true"></i></span>
								<input id="txtTarjeta" name="txtTarjeta" type="text" class="form-control" placeholder="* Número de tarjeta">
							</div>
							<br />
							<div class="input-group">
								<span class="input-group-addon">&nbsp;<i class="fa fa-lock fa-inverse" aria-hidden="true"></i>&nbsp;</span>
								<input id="txtTarjeta" name="txtTarjeta" type="text" class="form-control" placeholder="* Contraseña">
							</div>
							<br />
							<button type="submit" class="btn btn-danger">INGRESAR</button>
							<button type="button" class="btn btn-link">Recuperar contraseña</button>
						</form>
					</div>
					<div class="col-sm-4 col-sm-offset-4 col-md-3 col-md-offset-6 text-center">
						<div id="carruselNegocios" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carruselNegocios" data-slide-to="0" class="active"></li>
								<li data-target="#carruselNegocios" data-slide-to="1"></li>
								<li data-target="#carruselNegocios" data-slide-to="2"></li>
								<li data-target="#carruselNegocios" data-slide-to="3"></li>
								<li data-target="#carruselNegocios" data-slide-to="4"></li>
							</ol>
							
							<div class="carousel-inner">
								<div class="item active">
									<img src="{$PAGE.imagenes}negocios/1.jpg" alt="Los Angeles" style="width:100%;">
								</div>
								
								<div class="item">
									<img src="{$PAGE.imagenes}negocios/2.jpg" alt="Los Angeles" style="width:100%;">
								</div>
								
								<div class="item">
									<img src="{$PAGE.imagenes}negocios/3.jpg" alt="Los Angeles" style="width:100%;">
								</div>
								<div class="item">
									<img src="{$PAGE.imagenes}negocios/4.jpg" alt="Los Angeles" style="width:100%;">
								</div>
								<div class="item">
									<img src="{$PAGE.imagenes}negocios/5.jpg" alt="Los Angeles" style="width:100%;">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-offset-3 descripcion text-center">
						SÉ UN SOCIO ROCKET CARD Y DESCUBRE QUE MIENTRAS MÁS COMPRAS, MÁS DINERO GANAS
					</div>
				</div>
			</div>
		</div>
		
		<div class="container beneficios">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h2>REGISTRATE TOTALMENTE GRATIS</h2>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="{$PAGE.imagenes}1.png" />
					<p class="descripcion"><span class="text-danger">Realiza</span> compras en Negocios Afiliados</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="{$PAGE.imagenes}2.png" />
					<p class="descripcion"><span class="text-danger">Acumula</span> dinero electrónico</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="{$PAGE.imagenes}3.png" />
					<p class="descripcion"><span class="text-danger">Canjealo</span> por dinero en efectivo</p>
				</div>
				<div class="col-xs-6 col-md-3 text-center item">
					<img src="{$PAGE.imagenes}4.png" />
					<p class="descripcion"><span class="text-danger">Utilízalo</span> para realizar más compras</p>
				</div>
			</div>
		</div>
		
		<!-- jQuery 2.1.4 -->
	    <script src="{$PAGE.ruta}plugins/jQuery/jQuery-2.1.4.min.js"></script>
	    <!-- jQuery UI 1.11.4 -->
	    <script src="{$PAGE.ruta}plugins/jQueryUI/jquery-ui.min.js"></script>
	    <link rel="stylesheet" href="{$PAGE.ruta}plugins/jQueryUI/jquery-ui.css">
	    <!-- Bootstrap 3.3.5 -->
	    <script src="{$PAGE.ruta}bootstrap/js/bootstrap.min.js"></script>
	    
	    {foreach from=$PAGE.scriptsJS item=script}
			<script type="text/javascript" src="{$script}?m={rand()}"></script>
		{/foreach}
	
	    {if $PAGE.debug}
	    	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js" type="text/javascript"></script>
	    {/if}
	</body>
</html>