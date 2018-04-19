<div class="row">
     <div class="col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4">
          <div class="account-wall">
               <form class="form-signin" name="cambiarPassword" id="cambiarPassword">
                     <div class="passwordUpdateOk"></div>
                     <input type="password" name="passwordActual" id="passwordActual" class="form-control" 
                     placeholder="Escribe tu contraseña actual" onKeyDown="deleteValidate('passwordActual');" 
                     data-placement="top" data-toggle="tooltip" title="Contraseña actual"><div id="passActualError"></div>
                
                    <br />
                
                     <input type="password" name="nuevoPassword" id="nuevoPassword" class="form-control" 
                     placeholder="Nueva contraseña" onKeyDown="deleteValidate('nuevoPassword');" 
                     data-placement="top" data-toggle="tooltip" title="Tu nueva contraseña"><div class="newPassError"></div>
                    
                     <input type="password" name="repetirNuevoPassword" id="repetirNuevoPassword" class="form-control" 
                       placeholder="Repetir nueva contraseña" onKeyDown="deleteValidate('repetirNuevoPassword');"
                       data-toggle="tooltip" title="Vuelve a escribir tu nueva contraseña"><div class="newPassError"></div>
                      
                     <button class="btn btn-info btn-lg btn-block" onClick="return changePassword();">Actualizar contraseña</button>
                    
                     <span class="clearfix"></span>
               </form>
          </div>
     </div>
</div>
<div class="row">
&nbsp;
</div>
