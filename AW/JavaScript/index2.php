<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Evento Resize</title>
    <script type="text/javascript">
      window.addEventListener('resize', function(){
        let ancho = window.innerWidth
        let alto = window.innerHeight
        let area = ancho * alto

        document.body.innerHTML = area
      })
    </script>
  </head>
  <body>
    <h1>Evento Resize</h1>
  </body>
</html>
