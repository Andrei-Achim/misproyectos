<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Procesa</title>
  </head>
  <body>
    <?php
      $fichero = 'datos.txt';
      $actual = file_get_contents($fichero);
      $actual .= $_POST['nombre']." ";
      $actual .= $_POST['apellido']." ";
      $actual .= $_POST['fecha']." ";
      $actual .= $_POST['edad']." ";
      $actual .= $_POST['favorito']." ";
      $actual .= $_POST['nota']." ";
      $actual .= $_POST['zodiaco']."\n";
      file_put_contents($fichero, $actual);
    ?>
    <h1>Guardado</h1>
    <a href="listado.php">Ir al listado</a>
  </body>
</html>
