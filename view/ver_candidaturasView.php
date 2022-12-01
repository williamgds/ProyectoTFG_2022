<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title><?php echo 'EasyATS - Sistema de gestión de candidaturas'; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <?php include_once 'chunks/header.php';?>
        <div class="container">
            <div class="row"><h3>Vista general</h3>
                <div class="col-xl">
        <section class="col-lg-12 candidato" style="height:400px;overflow-y:scroll;">
          <?php if(isset($positions) && count($positions)>=1) { ?>  
            <table class="table">
                <thead>
                <th scope="col">ID</th>
                <th scope="col">Nombre de la candidatura</th>
                <th scope="col">Estado de la candidatura</th>
                <th scope="col">Banda salarial mínima</th>
                <th scope="col">Banda salarial máxima</th>
                <th scope="col">Tipo de jornada</th>
                <th scope="col">Requiere presencialidad</th>
                <th scope="col">Tipo de contratación</th>
                <th scope="col">Borrar proceso</th>
                </thead>
                <tbody>
            <?php foreach($positions as $position) {?>
                <?php echo "<tr><th scope='row'>" . $position->id . "</th>"; ?>
                <?php echo "<td>" . $position->nombre_candidatura . "</td>"; ?>
                <?php echo "<td>" . $position->estado_candidatura . "</td>"; ?>
                <?php echo "<td>" . $position->banda_salarial_low . "</td>"; ?>
                <?php echo "<td>" . $position->banda_salarial_high . "</td>"; ?>
                <?php echo "<td>" . $position->tipo_jornada . "</td>"; ?>
                    <!-- Sustituir por JavaScript -->
                <?php if ($position->presencialidad == 1) {echo "<td>" . "Sí" . "</td>";} else { echo "<td>" . "No". "</td>";} ?>
                <?php echo "<td>" . $position->tipo_contratacion . "</td>"; ?>
                <?php echo "<td>" . "<a href='".$helper->url("candidaturas","erase")."&id=". $position->id ."' class='btn btn-danger'>Borrar</a></td>" ;?>
                <?php echo "<td>" . "<a href='".$helper->url("candidaturas","edit")."&id=". $position->id ."' class='btn btn-info'>Editar</a></td>" ;?>
                <?php echo "</tr>";?>
                 <?php } ?>
            <?php } ?>
            </tbody>
            </table>
        </section>
              </div>
                </div>
        <footer class="col-lg-12">
           <?php echo "EasyATS - Open Source";?>
        </footer>
    </div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>