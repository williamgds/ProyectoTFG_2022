<!DOCTYPE HTML>
<html lang="es">
   <head>
      <meta charset="utf-8"/>
      <title><?php echo 'EasyATS - Sistema de gestión de candidaturas'; ?></title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   </head>
   <body>
      <div class="container">
         <div class="d-flex justify-content-center">
               <form action="<?php echo $helper->url("login","authorise_access"); ?>" method="post">
                   <div class="col d-flex justify-content-center">
                 <h1>EasyATS</h1>
             </div>
                  <div class="form-outline mb-x1">
                     <label class="form-label" for="user">Usuario</label>
                     <input type="text" id="user" name="user" class="form-control" />
                  </div>
                  <div class="form-outline mb-x1">
                     <label class="form-label" for="pass">Contraseña</label>
                     <input type="password" id="pass" name="pass" class="form-control" />
                  </div>
                  <div class="row mb-1">
                     <div class="col d-flex justify-content-center">
                        <div class="form-check">
                           <label class="form-check-label" for="recordar_sesion"> Recordarme </label>
                           <input class="form-check-input" type="checkbox" value="" id="recordar_sesion" checked />
                        </div>
                     </div>
                  </div>
                   <div class="col d-flex justify-content-center">
                        <input type="submit" class="btn btn-primary btn-lg" value="Iniciar Sesión" />   
                   </div>
               </form>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>