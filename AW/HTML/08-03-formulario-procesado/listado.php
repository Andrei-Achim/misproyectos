<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Listado</h1>
    <?php
    $fichero = fopen("datos.txt", "r");
    while($data = fgetcsv($fichero, 1000, " ")) {
        echo $data[0] . " " . $data[1] . " Fecha nacimiento: " . $data[2] .  " Edad: " . $data[3] . " Color: " . $data[4] . " Nota: " . $data[5] . " Zodiaco: " . $data[6]. "<br>";
    }
    fclose($fichero);
    ?>
  </body>
</html>
