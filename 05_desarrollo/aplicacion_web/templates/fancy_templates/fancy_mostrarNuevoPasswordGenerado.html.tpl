<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Sistema de estímulos al desempeño docente - [{$titulo}]</title>

    <link rel="stylesheet" type="text/css" href="{$ruta}css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{$ruta}css/default.css" />
    <link rel="stylesheet" type="text/css" href="{$ruta}css/uploadify.css">
    <link rel="stylesheet" type="text/css" href="{$ruta}css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="{$ruta}css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="{$ruta}css/fancybox_helpers/jquery.fancybox.css" media="screen" />

    <script src="{$ruta}js/jquery.min.js" type="text/javascript"></script>
    <script src="{$ruta}js/jquery-ui.min.js"></script>
    <script src="{$ruta}js/jquery.ui.datepicker-es.js"></script>
    <script src="{$ruta}js/jquery.uploadify.min.js" type="text/javascript"></script>
    <script src="{$ruta}js/jquery.maskedinput.js"></script>
    <script src="{$ruta}js/shadowbox.js"></script>
    <script src="{$ruta}js/bootstrap.min.js"></script>
    <script src="{$ruta}js/jquery.mousewheel-3.0.6.pack_fancy.js"></script>
    <script src="{$ruta}js/jquery.fancybox.pack.js"></script>
    {literal}
    <script type="text/javascript">
		
		function salir(){

			parent.$.fancybox.close();
			
		}
		
    </script>
    {/literal}
<script type="text/javascript">

</script>
<head>
<body class="container general">
<div id="respuestaEliminar">
	<div class="jumbotron">
		<h3 class="titulo"><center>¡Se ha generado un nuevo password al usuario <b>{$nombre}</b>!</center></h3>
		<br />
		<p>
		Te pedimos por favor copies el siguiente password:<br />
		Password: <b>{$password}</b><br />
		</p>
		<center>
			<input type="button" class="btn" onClick="salir();" value="Salir" />
		</center>
	</div>
</div>
</body>
</html>
