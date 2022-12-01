<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title><?php echo 'Crear candidatura'; ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="b-example-divider"></div>
<!-- Header -->
  <?php include_once("chunks/header.php"); ?>
        <div class="container">
            <div class="col-lg-auto"><h1>Crear candidatura</h1></div>
            <form action="<?php echo $helper->url("candidaturas","create"); ?>" method="post" enctype="multipart/form-data" class="col-lg-5">
            <div class="form-group row">
    <label for="nombre" class="col-5 col-form-label">Título de la candidatura</label> 
    <div class="col-7">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nombre_candidatura" name="nombre_candidatura" type="text" required="required" class="form-control">
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
          <textarea id="notas_candidatura" name="notas_candidatura" class="form-control"></textarea>
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
                <option value="Abierta">Abierta</option>
                <option value="Cerrada">Cerrada</option>
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
        <input id="banda_salarial_low" name="banda_salarial_low" type="number" class="form-control">
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
        <input id="banda_salarial_high" name="banda_salarial_high" type="number" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tipo_jornada" class="col-5 col-form-label">Tipo de jornada</label> 
    <div class="col-7">
      <select id="tipo_jornada" name="tipo_jornada" class="custom-select">
        <option value="Completa">Jornada completa</option>
        <option value="Media jornada">Media jornada</option>
        <option value="Beca">Beca</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="presencialidad" class="col-5 col-form-label">¿Requiere presencialidad?</label> 
    <div class="col-7">
      <select id="presencialidad" name="presencialidad" class="custom-select">
        <option value="1">Presencialidad requerida</option>
        <option value="0">Opción teletrabajo</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="tipo_contratacion" class="col-5 col-form-label">Tipo de jornada</label> 
    <div class="col-7">
      <select id="tipo_contratacion" name="tipo_contratacion" class="custom-select">
        <option value="Indefinido">Contrato indefinido</option>
        <option value="Temporal">Contrato temporal</option>
        <option value="Sustitucion">Sustitución por baja</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-9 col-7">
      <button name="submit" type="submit" class="btn btn-primary">Registrar candidatura</button>
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