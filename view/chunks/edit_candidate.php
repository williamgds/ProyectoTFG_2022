<!-- Pieza reutilizable para recuperar un candidato y no tener que estar reescribiendo constantemente los gets y los sets -->
<div class="form-group row">
   <label for="nombre" class="col-5 col-form-label">Nombre</label> 
   <div class="col-7">
      <div class="input-group">
         <div class="input-group-prepend">
            <div class="input-group-text">
               <i class="fa fa-address-card"></i>
            </div>
         </div>
         <input id="nombre" name="nombre" type="text" required="required" class="form-control" value ="<?php echo $edit_candidate->nombre ;?>">
      </div>
   </div>
</div>
<div class="form-group row">
   <label for="apellido_1" class="col-5 col-form-label">Primer apellido</label> 
   <div class="col-7">
      <div class="input-group">
         <div class="input-group-prepend">
            <div class="input-group-text">
               <i class="fa fa-address-book"></i>
            </div>
         </div>
         <input id="apellido_1" name="apellido_1" type="text" class="form-control" value ="<?php echo $edit_candidate->apellido_1 ;?>">
      </div>
   </div>
</div>
<div class="form-group row">
   <label for="apellido_2" class="col-5 col-form-label">Segundo apellido</label> 
   <div class="col-7">
      <div class="input-group">
         <div class="input-group-prepend">
            <div class="input-group-text">
               <i class="fa fa-address-card"></i>
            </div>
         </div>
         <input id="apellido_2" name="apellido_2" type="text" class="form-control" value ="<?php echo $edit_candidate->apellido_2 ;?>">
      </div>
   </div>
</div>
<div class="form-group row">
   <label for="genero" class="col-5 col-form-label">Género</label> 
   <div class="col-7">
      <select id="genero" name="genero" class="custom-select" aria-describedby="generoHelpBlock">
         <option value="Masculino">Masculino</option>
         <option value="Femenino">Femenino</option>
         <option value="blank">Prefiero no decirlo</option>
         <option value="otro">Otro</option>
      </select>
      <span id="generoHelpBlock" class="form-text text-muted">Introduce el género con el que te identifiques</span>
   </div>
</div>
<div class="form-group row">
   <label for="correo_contacto" class="col-5 col-form-label">Correo de contacto</label> 
   <div class="col-7">
      <div class="input-group">
         <div class="input-group-prepend">
            <div class="input-group-text">
               <i class="fa fa-mail-forward"></i>
            </div>
         </div>
         <input id="correo_contacto" name="correo_contacto" type="text" class="form-control" value ="<?php echo $edit_candidate->correo_contacto ;?>">
      </div>
   </div>
</div>
<div class="form-group row">
   <label for="banda_salarial" class="col-5 col-form-label">Banda salarial</label> 
   <div class="col-7">
      <div class="input-group">
         <div class="input-group-prepend">
            <div class="input-group-text">
               <i class="fa fa-money"></i>
            </div>
         </div>
         <input id="banda_salarial" name="banda_salarial" type="text" class="form-control" value ="<?php echo $edit_candidate->banda_salarial ;?>">
      </div>
   </div>
</div>
<div class="form-group row">
   <label for="disponibilidad" class="col-5 col-form-label">Disponibilidad</label> 
   <div class="col-7">
      <select id="disponibilidad" name="disponibilidad" class="custom-select">
         <option value="Completa">Completa</option>
         <option value="Parcial">Parcial</option>
      </select>
   </div>
</div>
<div class="form-group row">
   <label for="calificacion" class="col-5 col-form-label">Calificación</label> 
   <div class="col-7">
      <input id="calificacion" name="calificacion" placeholder="Del 1 al 10" type="text" class="form-control" value ="<?php echo $edit_candidate->calificacion ;?>">
   </div>
</div>
<div class="form-group row">
   <label for="telefono_movil" class="col-5 col-form-label">Teléfono móvil</label> 
   <div class="col-7">
      <div class="input-group">
         <div class="input-group-prepend">
            <div class="input-group-text">
               <i class="fa fa-phone-square"></i>
            </div>
         </div>
         <input id="telefono_movil" name="telefono_movil" type="text" class="form-control" value ="<?php echo $edit_candidate->telefono_movil ;?>">
      </div>
   </div>
</div>