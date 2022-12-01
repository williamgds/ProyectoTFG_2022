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
            <div class="row"><h3>Candidatos asociados</h3>
                <div class="col-xl">
        <section class="col-lg-12 aplicaciones" style="height:400px;overflow-y:scroll;">
          <?php if(isset($relations) && count($relations)>=1) { ?>  
            <table class="table">
                <thead>
                <th scope="col">ID del candidato</th>
                <th scope="col">ID de la candidatura</th>
                <th scope="col">Nombre candidato</th>
                <th scope="col">Apellido</th>
                <th scope="col">Banda salarial cand.</th>
                <th scope="col">Disponibilidad</th>
                <th scope="col">Candidatura</th>
                <th scope="col">Min. bda. salarial</th>
                <th scope="col">Máx. bda. salarial</th>
                <th scope="col">Estado de la candidatura</th>
                </thead>
                <tbody>
            <?php foreach($relations as $relation) {?>
                <?php echo "<tr><th scope='row'>" . $relation->id_candidato . "</th>"; ?>
                <?php echo "<td>" . $relation->id_candidatura . "</td>"; ?>
                <?php echo "<td>" . $relation->nombre_candidato . "</td>"; ?>
                <?php echo "<td>" . $relation->apellido_candidato . "</td>"; ?>
                <?php echo "<td>" . $relation->banda_salarial . "</td>"; ?>
                <?php echo "<td>" . $relation->disponibilidad . "</td>"; ?>
                <?php echo "<td>" . $relation->nombre_candidatura . "</td>"; ?>
                <?php echo "<td>" . $relation->banda_salarial_low . "</td>"; ?>
                <?php echo "<td>" . $relation->banda_salarial_high . "</td>"; ?>
                <?php echo "<td>" . $relation->estado_candidatura . "</td>"; ?>
                <?php echo "<td>" . "<a href='".$helper->url("candidatos","edit")."&id=". $relation->id_candidato ."' class='btn btn-success'>Editar candidato</a></td>" ;?>
                <?php echo "<td>" . "<a href='".$helper->url("candidaturas","edit")."&id=". $relation->id_candidatura ."' class='btn btn-success'>Editar candidatura</a></td>" ;?>
                <?php echo "<td>" . "<a href='".$helper->url("relacioncandidatos","erase")."&id_candidato=". $relation->id_candidato ."' class='btn btn-danger'>Descartar candidato</a></td>" ;?>
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