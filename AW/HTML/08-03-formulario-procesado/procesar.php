<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FORM procesado</title>
  </head>
  <body>
    <?php
      print_r($_POST);
    ?>
    <h1>Bienvenido <?php echo $_POST['nombre'] ?> <?php echo $_POST['apellido'] ?> </h1>
    <h2>Fecha Nacimiento <?php echo $_POST['fecha'] ?> </h2>
    <h2>Color Favorito <?php echo $_POST['favorito'] ?> </h2>
    <h2>Nota examen deseada <?php echo $_POST['nota'] ?></h2>
    <h2>Signo zodiaco <?php echo $_POST['zodiaco'] ?></h2>
  </body>
</html>
