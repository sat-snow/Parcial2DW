<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CResultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/styles3.css">

</head>
<body>

  <div class="contenedor-juego">
    <h1>Tres en Raya</h1>
    <div class="tablero">
      <input type="text" id="celda-1" class="celda" maxlength="1" />
      <input type="text" id="celda-2" class="celda" maxlength="1" />
      <input type="text" id="celda-3" class="celda" maxlength="1" />
      <input type="text" id="celda-4" class="celda" maxlength="1" />
      <input type="text" id="celda-5" class="celda" maxlength="1" />
      <input type="text" id="celda-6" class="celda" maxlength="1" />
      <input type="text" id="celda-7" class="celda" maxlength="1" />
      <input type="text" id="celda-8" class="celda" maxlength="1" />
      <input type="text" id="celda-9" class="celda" maxlength="1" />
    </div>

    <div class="acciones">
      <button id="boton-jugar">Jugar</button>
      <button id="boton-reiniciar">Reiniciar</button>
      <button onclick="red1()">Formulario 1</button>
      <button onclick="red2()">Formulario 2</button>
    </div>

    <div id="mensaje"></div>
  </div>
  </body>
<script src="public/js/funciones3.js" ></script>
</html>



