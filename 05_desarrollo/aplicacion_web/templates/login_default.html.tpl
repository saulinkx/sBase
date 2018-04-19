<div class="row">
        <div class="col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <form class="form-signin" action="index.php?modulo=login" method="post">
		<input type="hidden" name="formId" value="loggin" />
                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Clave Única de Registro de Población" value="{$datos.usuario}" onKeyDown="limpiaError();" onBlur="convertirMayusculas('usuario');" required autofocus>
                <br />
                <input type="password" name="password" class="form-control" placeholder="Password" value="{$datos.password}" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
                {*
                    <a href="index.php?modulo=recuperarPassword" class="pull-right need-help">
                         Recuperar contraseña
                    </a>
                *}
               <span class="clearfix">
               </span>
                </form>
            </div>
            <a href="index.php?modulo=registro" class="text-center new-account">Registrar solicitud</a>
        </div>
    </div>
<div class="row">
&nbsp;
</div>
