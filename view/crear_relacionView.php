<!DOCTYPE HTML>
<html lang="es">
   <head>
      <meta charset="utf-8"/>
      <title><?php echo 'Asociar un candidato a una candidatura'; ?></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   </head>
   <body>
      <div class="b-example-divider"></div>
      <!-- Header -->
      <?php include_once("chunks/header.php"); ?>
      <div class="container">
         <div class="col-lg-auto">
            <h1>Asociar a candidatura</h1>
         </div>
         <?php if (isset($all_positions)) {?>
         <form action="<?php echo $helper->url_with_variables("relacioncandidatos","create","id_candidato",$id_candidato); ?>" method="post" class="col-lg-5">
               <div class="form-group">
                   <label for="id_candidatura">Seleccionar la candidatura a asociar</label>
                   <select class="form-control" id="id_candidatura" name="id_candidatura">
                       <?php foreach ($all_positions as $position) {?>
                            <?php echo "<option value='$position->id'>$position->nombre_candidatura</option>";?>
                       <?php }?>
                   </select>
                  <button name="submit" type="submit" class="btn btn-primary">Asociar</button>
               </div>
            
         </form>
         </div>
         <?php }?>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      </div>
   </body>
</html>