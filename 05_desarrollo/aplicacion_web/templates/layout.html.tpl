<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Plataforma WEB - [{$titulo}]</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="css/fancybox_helpers/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />    
    
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.ui.datepicker-es.conf.js" type="text/javascript"></script>
    <script src="js/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="js/funciones/default.js"></script>

</head>

<body>
	{include file="encabezado.html.tpl"}
	{include file="menu.html.tpl"}
<div class="container general">
	{if $errorMensaje}
	<div class="row">
		<div id="error" class="col-sm-4 col-md-6 col-md-offset-3 alert alert-danger">
	  		{$errorMensaje}	
		</div>
	</div>
	{/if}
	{assign var="template" value="templates/"|cat:$contenido}
	{if not empty($contenido) and file_exists ($template)}
	{include file=$contenido}
	{else}
	<div class="row">
		<div class="col-sm-4 col-md-6 col-md-offset-3 alert alert-danger">
	  		La plantilla {$contenido} no existe
		</div>
	</div>
	{/if}
	<div class="row">
	    {include file="piepagina.html.tpl"}
	</div>
</div>
</body>
</html>
