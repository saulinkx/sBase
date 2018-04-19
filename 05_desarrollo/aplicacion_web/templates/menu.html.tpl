{if not $ocultarMenu}
<nav class="navbar navbar-default">
  <div class="container-fluid">
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-1" >
	<span class="sr-only" >menu</span>
	<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {if isset ($sesionIniciada)}
	<div class="navbar-brand"><span style="font-size:15px;">Bienvenido:</span><br /><b><span  style="font-size:10px;">{$nombre}</span></b></div>
      {/if}
    </div>
    
    <div class="collapse navbar-collapse navbar-right" id="navbar-1" >
      <ul class="nav navbar-nav" >
	{if $mostrarLogin == "1"}
	  <li class="menu_bar"><a href="index.php?modulo=inicio">Inicio</a></li>
	{else}
	  <li class="menu_bar"><a href="index.php?modulo=panelUsuario">Inicio</a></li>
	{/if}
	
	{if in_array("institucional", $usuarioPermisos)}
	  <li class="dropdown menu_bar">
	    <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Institucional <span class="caret"></span></a>
	    <ul class="dropdown-menu">
	      {if in_array("escuelaAgregar", $usuarioPermisos)}
	      <li><a href="index.php?modulo=escuelaAgregar">Nuevo tecnológico</a></li>
	      {/if}
	      {if in_array("escuelaListar", $usuarioPermisos)}
	      <li><a href="index.php?modulo=escuelaListar">Listar tecnológicos</a></li>
	      {/if}
	      {if in_array("profesorAgregar", $usuarioPermisos)}
		<li class="divider"></li>
	      <li><a href="index.php?modulo=profesorAgregar">Nuevo docente</a></li>
	      {/if}
	      {if in_array("profesorListar", $usuarioPermisos)}
	      <li><a href="index.php?modulo=profesorListar">Listar docentes</a></li>
	      {/if}
	    </ul>
	  </li>
	{/if}
	
	{if in_array("calendario", $usuarioPermisos)}
	  <li class="dropdown menu_bar">
	    <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Calendario <span class="caret"></span></a>
	    <ul class="dropdown-menu">
	      {if in_array("asignarFechas", $usuarioPermisos)}
		<li><a href="index.php?modulo=asignarFechas">Asignar fechas de acceso</a></li>
	      {/if}
	    </ul>
	  </li>
	{/if}
	
	{if in_array("usuarios", $usuarioPermisos)}
	  <li class="dropdown menu_bar">
	    <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Usuarios <span class="caret"></span></a>
	    <ul class="dropdown-menu">
	      {if in_array("usuarioAgregar", $usuarioPermisos)}
		<li><a href="index.php?modulo=usuarioAgregar">Nuevo usuario</a></li>
	      {/if}
	      {if in_array("usuarioListar", $usuarioPermisos)}
		<li><a href="index.php?modulo=usuarioListar">Lista de usuarios</a></li>
	      {/if}
	      {if in_array("perfilAgregar", $usuarioPermisos)}
	      <li class="divider"></li>
		<li><a href="index.php?modulo=perfilAgregar">Nuevo perfil</a></li>
	      {/if}
	      {if in_array("perfilListar", $usuarioPermisos)}
		<li><a href="index.php?modulo=perfilListar">Lista de perfiles</a></li>
	      {/if}
	      {if in_array("passwordModificar", $usuarioPermisos)}
	      <li class="divider"></li>
		<li><a href="index.php?modulo=passwordModificar">Cambiar Password</a></li>
	      {/if}
	    </ul>
	  </li>
	{/if}
	
	{if in_array("miPerfil",$usuarioPermisos)}
	
	     <li class="dropdown menu_bar">
	          <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Mi Perfil <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	               {if in_array("changePassword", $usuarioPermisos)}
	               <li><a href="index.php?modulo=changePassword">Modificar contraseña</a></li>
	               {/if}
	          </ul>
	{/if}
	
	<li class="dropdown menu_bar">
	  <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Ayuda <span class="caret"></span></a>
	  <ul class="dropdown-menu">
		{if not isset($ocultarAcercaDe)}
			<li><a href="index.php?modulo=acerca_de">Acerca de... </a></li>
		{/if}
	  </ul>
	</li>

	{if isset ($sesionIniciada)}
	  <li><a href="#">&nbsp;</a></li>
	  <li class="menu_bar"><a href="index.php?modulo=logout"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
	{/if}
	
	{if $mostrarLogin == "1"}
	  <li><a href="#">&nbsp;</a></li>
	  <li class="menu_bar"><a href="index.php?modulo=login"><span class="glyphicon glyphicon-user"></span> Login</a></li>
	{/if}
	
      </ul>
    </div>
  </div>
</nav>
{/if}
