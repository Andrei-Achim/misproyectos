<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <script type="text/javascript">
      window.onload = function(){
        range = document.getElementById('range-nota')
        range.addEventListener("change",function(e){
          document.getElementById("output-nota").innerHTML=range.value;
        })
      }
    </script>
  </head>
  <body>
    <h1>Formulario Procesado</h1>
    <?php
    echo "Hola visitantes";
     ?>
     <form class="" action="procesar.php" method="post"><br>
      <h2>Nombre </h2><input type="text" name="nombre" value="" placeholder="Introduzca su Nombre"><br>
      <h2>Apellido</h2><input type="text" name="apellido" value="" placeholder="Intoduzca su Apellido"><br>
      <h2>Fecha de nacimiento</h2> <input type="date" name="fecha" value="" placeholder="Fecha de nacimiento"><br>
      <h2>Edad</h2> <input type="number" name="edad" value="" placeholder="Edad"><br>
      <h2>Color Favorito</h2><input type="color" name="favorito" value="" placeholder="Color Favorito"><br>
       <h2> ¿Qué nota cree que sacá en Aplicaciones Web?</h2>
       <input id="range-nota" type="range" min="0" max="10" step="1" name="nota" value="" >
       <span id="output-nota"></span><br>
       <h2> Su signo del zodiaco</h2>
       <select class="" name="zodiaco">
         <option value="Aries">Aries</option>
         <option value="Tauro">Tauro</option>
         <option value="Géminis">Géminis</option>
         <option value="Cáncer">Cáncer</option>
         <option value="Leo">Leo</option>
         <option value="Virgo">Virgo</option>
         <option value="Libra">Libra</option>
         <option value="Escorpio">Escorpio</option>
         <option value="Sagitario">Sagitario</option>
         <option value="Capricornio">Capricornio</option>
         <option value="Acuario">Acuario</option>
         <option value="Piscis">Piscis</option>
       </select>
       <h2><input type="submit" name="envio" value="Enviar"></h2>
     </form>
  </body>
</html>
