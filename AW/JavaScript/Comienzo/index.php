<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript">
      window.addEventListener("load", function(){
        //alert("Hola Mundo!!!")//
        let miboton
        let cuenta = 0;
        miboton = document.getElementById("boton")
        miboton.addEventListener("click", function(){
          document.body.append("Botón pulsado!" + cuenta)
          cuenta = cuenta + 1
        })
      })
    </script>
  </head>
  <body>
    <h1>Primer JS</h1>
    <input type="button" id="boton" name="" value="Púlsame">
  </body>
</html>
