<?php
session_start();

if ( ! isset($_POST['numero'])) { // si no envío nada
  $_SESSION['numero']=rand(1,10);
  $_SESSION['intentos']=0;
}

$numero_aleatorio=$_SESSION['numero'];
$intentos=$_SESSION['intentos'];
$_SESSION['intentos']=$_SESSION['intentos']+1;
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
    <p> <a href="index.php">Reiniciar Partida</a> </p>
  </body>
</html>
