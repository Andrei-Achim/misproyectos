<?php
$numero_aleatorio=rand(1,3);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Juego</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <h1>Piedra, Papel y Tijeras</h1>
    <p>Hola, vamos a jugar un juego</p>
    </p>
    <div class="">
      <form class="" action="Juego.php" method="post">
        <p>Elije tu jugada</p>
        <select name="numero" required="required">
                              <option value="1">Piedra</option>
                              <option value="2">Papel</option>
                              <option value="3">Tijera</option>
                          </select>
          <input type="submit" name="" value="Enviar">
      </form>
      <h2>Respuesta:</h2>
      <?php
      if (isset($_POST['numero']) ) {
        echo "<h3>Has Elegido:" . $_POST ['numero'] . "</h3>";
        echo "<h3>La maquina eligio:" . $numero_aleatorio . "</h3>";
        if(($_POST ['numero']==1&&$numero_aleatorio==3)||($_POST ['numero']==2&&$numero_aleatorio==1)||($_POST ['numero']==3&&$numero_aleatorio==2))
          echo 'Gana el usuario<br>';
        if(($_POST ['numero']==3&&$numero_aleatorio==1)||($_POST ['numero']==1&&$numero_aleatorio==2)||($_POST ['numero']==2&&$numero_aleatorio==3))
          echo 'Gana la maquina<br>';
        if(($_POST ['numero']==1&&$numero_aleatorio==1)||($_POST ['numero']==2&&$numero_aleatorio==2)||($_POST ['numero']==3&&$numero_aleatorio==3))
          echo 'Empate<br>';
    }
    else {
          echo "Bienvenido al juego!";
      }
       ?>
    </div>
    <p> <a href="Juego.php">Reiniciar Partida</a> </p>
  </body>
</html>
