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
        <section class="col-lg-12 candidato" style="height:500px;overflow-y:scroll;">
          <?php if(isset($candidates) && count($candidates)>=1) { ?>  
            <table class="table">
                <thead>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Primer Apellido</th>
                <th scope="col">Segundo Apellido</th>
                <th scope="col">Género</th>
                <th scope="col">Banda salarial</th>
                <th scope="col">Calificacion</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Acciones</th>
                </thead>
                <tbody>
            <?php foreach($candidates as $candidate) {?>
                <?php echo "<tr><th scope='row'>" . $candidate->id . "</th>"; ?>
                <?php echo "<td>" . $candidate->nombre . "</td>"; ?>
                <?php echo "<td>" . $candidate->apellido_1 . "</td>"; ?>
                <?php echo "<td>" . $candidate->apellido_2 . "</td>"; ?>
                <?php echo "<td>" . $candidate->genero . "</td>"; ?>
                <?php echo "<td>" . $candidate->banda_salarial . "</td>"; ?>
                <?php echo "<td>" . $candidate->calificacion . "</td>"; ?>
                <?php echo "<td>" . $candidate->telefono_movil . "</td>"; ?>
                <?php echo "<td>" . "<a href='".$helper->url("candidatos","erase")."&id=". $candidate->id ."' class='btn btn-danger'>Borrar</a></td>" ;?>
                <?php echo "<td>" . "<a href='".$helper->url("candidatos","edit")."&id=". $candidate->id ."' class='btn btn-info'>Editar</a></td>" ;?>
                <?php echo "<td>" . "<a href='".$helper->url("relacioncandidatos","associate_to_position")."&id_candidato=". $candidate->id ."' class='btn btn-success'>Asociar a posición</a></td>" ;?>
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