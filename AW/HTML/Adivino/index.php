<?php
$numero_aleatorio=2;
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Adivino</title>
  </head>
  <body>
    <h1>Adivino</h1>
    <p>Hola, aqui aprenderas como jugar un juego de adivinanza</p>
    <div class="">
      <form class="" action="index.php" method="post">
        <p>Primero escribe un numero del 1 al 10</p>
        <input type="text" name="numero" value="">
        <p>Envia el numero para que lo vea y darte una respuesta</p>
        <input type="submit" name="" value="Enviar">
      </form>
      <h2>Respuesta:</h2>
      <?php
      if (isset($_POST['numero']) ) {
        echo "<h3>Has enviado algo:" . $_POST ['numero'] . "</h3>";
        if ($numero_aleatorio == $_POST['numero']) {
          echo "<h1>Has ganado!!!</h1>";
        }
        if ($numero_aleatorio < $_POST['numero']) {
          echo "<h1>Tu numero es mas alto</h1>";
        }
        if ($numero_aleatorio > $_POST['numero']) {
          echo "<h1>Tu numero es mas bajo</h1>";
        }
      } else {
          echo "Bienvenido al juego!";
      }
       ?>
    </div>
  </body>
</html>
