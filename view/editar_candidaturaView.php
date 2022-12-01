<!DOCTYPE HTML>
<html lang="es">
   <head>
      <meta charset="utf-8"/>
      <title><?php echo 'Editar candidatura'; ?></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   </head>
   <body>
      <div class="b-example-divider"></div>
      <!-- Header -->
      <?php include_once("chunks/header.php"); ?>
      <div class="container">
         <div class="col-lg-auto">
            <h1>Editar candidatura</h1>
         </div>
         <!--Chunkear esto!-->
         <?php if (isset($edit_position)) {?>
         <form action="<?php echo $helper->url_with_variables("candidaturas","update_position","id",$_GET["id"]); ?>" method="post" class="col-lg-5">
            <div class="form-group row">
               <label for="nombre" class="col-5 col-form-label">Título de la candidatura</label> 
               <div class="col-7">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <div class="input-group-text">
                           <i class="fa fa-address-card"></i>
                        </div>
                     </div>
                     <input id="nombre_candidatura" name="nombre_candidatura" type="text" required="required" class="form-control" value="<?php echo $edit_position->nombre_candidatura;?>">
                  </div>
               </div>
            </div>
            <div class="form-group row">
               <label for="notas_candidatura" class="col-5 col-form-label">Descripción de la candidatura</label> 
               <div class="col-7">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <div class="input-group-text">
                           <i class="fa fa-address-book"></i>
                        </div>
                     </div>
                     <textarea id="notas_candidatura" name="notas_candidatura" class="form-control"><?php echo $edit_position->notas_candidatura;?></textarea>
                  </div>
               </div>
            </div>
            <div class="form-group row">
               <label for="estado_candidatura" class="col-5 col-form-label">Estado de la candidatura</label> 
               <div class="col-7">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <div class="input-group-text">
                           <i class="fa fa-address-card"></i>
                        </div>
                     </div>
                     <select class="form-control" id="estado_candidatura" name="estado_candidatura">
                        <!-- Sustituir con JavaScript en el front -->
                        <option value="Abierta" <?php if($edit_position->estado_candidatura === "Abierta"){echo " selected ";}?>>Abierta</option>
                        <option value="Cerrada" <?php if($edit_position->estado_candidatura === "Cerrada"){echo " selected ";}?>>Cerrada</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="form-group row">
               <label for="banda_salarial_low" class="col-5 col-form-label">Banda salarial inferior</label> 
               <div class="col-7">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <div class="input-group-text">
                           <i class="fa fa-mail-forward"></i>
                        </div>
                     </div>
                     <input id="banda_salarial_low" name="banda_salarial_low" type="text" class="form-control" value="<?php echo $edit_position->banda_salarial_low;?>">
                  </div>
               </div>
            </div>
            <div class="form-group row">
               <label for="banda_salarial_high" class="col-5 col-form-label">Banda salarial superior</label> 
               <div class="col-7">
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <div class="input-group-text">
                           <i class="fa fa-money"></i>
                        </div>
                     </div>
                     <input id="banda_salarial_high" name="banda_salarial_high" type="text" class="form-control" value="<?php echo $edit_position->banda_salarial_high;?>">
                  </div>
               </div>
            </div>
            <div class="form-group row">
               <label for="tipo_jornada" class="col-5 col-form-label">Tipo de jornada</label> 
               <div class="col-7">
                  <select id="tipo_jornada" name="tipo_jornada" class="custom-select">
                     <option value="Completa" <?php if($edit_position->tipo_jornada === "Completa"){echo " selected ";}?>>Jornada completa</option>
                     <option value="Media jornada" <?php if($edit_position->tipo_jornada === "Media jornada"){echo " selected ";}?>>Media jornada</option>
                     <option value="Beca" <?php if($edit_position->tipo_jornada === "Beca"){echo " selected ";}?>>Beca</option>
                  </select>
               </div>
            </div>
            <div class="form-group row">
               <label for="presencialidad" class="col-5 col-form-label">¿Requiere presencialidad?</label> 
               <div class="col-7">
                  <select id="presencialidad" name="presencialidad" class="custom-select">
                     <option value="1" <?php if($edit_position->tipo_jornada == 1){echo " selected ";}?>>Presencialidad requerida</option>
                     <option value="0" <?php if($edit_position->tipo_jornada == 0){echo " selected ";}?>>Opción teletrabajo</option>
                  </select>
               </div>
            </div>
            <div class="form-group row">
               <label for="tipo_contratacion" class="col-5 col-form-label">Tipo de contrato</label> 
               <div class="col-7">
                  <select id="tipo_contratacion" name="tipo_contratacion" class="custom-select">
                     <option value="Indefinido" <?php if($edit_position->tipo_contratacion == "Indefinido"){echo " selected ";}?>>Contrato indefinido</option>
                     <option value="Temporal" <?php if($edit_position->tipo_contratacion == "Temporal"){echo " selected ";}?>>Contrato temporal</option>
                     <option value="Sustitucion" <?php if($edit_position->tipo_contratacion == "Sustitucion"){echo " selected ";}?>>Sustitución por baja</option>
                  </select>
               </div>
            </div>
            <div class="form-group row">
               <div class="offset-9 col-7">
                  <button name="submit" type="submit" class="btn btn-primary">Editar candidatura</button>
               </div>
            </div>
         </form>
         <?php }?>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      </div>
   </body>
</html>