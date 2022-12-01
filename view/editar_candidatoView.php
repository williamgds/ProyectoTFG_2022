<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title><?php echo 'Editar candidato'; ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="b-example-divider"></div>
<!-- Header -->
  <?php include_once("chunks/header.php"); ?>
        <div class="container">
            <div class="col-lg-auto"><h1>Editar candidato</h1></div>
                <form action="<?php echo $helper->url_with_variables("candidatos","update_candidate","id",$_GET["id"]); ?>" method="post" enctype="multipart/form-data" class="col-lg-5">
            <?php if (isset($edit_candidate)) {?>
                    <?php include_once("chunks/edit_candidate.php");?>
            <?php }?>
                    <input type="submit" value="Editar candidato" />    
        </form>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </div>
    </body>
</html>