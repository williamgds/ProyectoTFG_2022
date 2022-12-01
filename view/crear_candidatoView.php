<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title><?php echo 'Crear candidato'; ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="b-example-divider"></div>
<!-- Header -->
  <?php include_once("chunks/header.php"); ?>
        <div class="container">
            <div class="col-lg-auto"><h1>Crear candidato</h1></div>
            <form action="<?php echo $helper->url("candidatos","create"); ?>" method="post" enctype="multipart/form-data" class="col-lg-5">
            <div class="form-group row">
    <label for="nombre" class="col-5 col-form-label">Nombre</label> 
    <div class="col-7">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nombre" name="nombre" type="text" required="required" class="form-control">
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
        <input id="apellido_1" name="apellido_1" type="text" required="required" class="form-control">
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
        <input id="apellido_2" name="apellido_2" type="text" required="required" class="form-control">
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
        <input id="correo_contacto" name="correo_contacto" type="email" required="required" class="form-control">
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
        <input id="banda_salarial" name="banda_salarial" type="number" required="required" class="form-control">
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
      <input id="calificacion" name="calificacion" placeholder="Del 1 al 10" type="text" class="form-control">
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
        <input id="telefono_movil" name="telefono_movil" type="number" class="form-control" required="required">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-9 col-7">
      <button name="submit" type="submit" class="btn btn-primary">Registrar</button>
    </div>
  </div>
        </form>
            <!-- Footer -->
        <!-- 
            <footer class="col-lg-12">
            <hr/>
            <p>ATS</p>
        </footer>
        
        -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </div>
    </body>
</html>