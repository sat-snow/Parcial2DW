<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CForms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/styles2.css">
</head>
<body>
    <div class="container">
        <div class="convertidor">
            <h2 class="text1">Conversor de Moneda</h2>
            <form id="formularioConversor">
                <div class="mb-3">
                    <input type="number" id="cantidad" class="control" placeholder="Ingrese la cantidad" required>
                </div>
                <div class="mb-3">
                    <select id="monedaOrigen" class="select">
                        <option value="USD" selected>USD</option>
                        <option value="EUR">EUR</option> 
                    </select>
                </div>
                <div class="mb-3">
                    <select id="monedaDestino" class="select">
                        <option value="USD">USD</option>
                        <option value="EUR" selected>EUR</option> 
                    </select>
                </div>
                <div class="mb-3">
                    <button type="button" id="botonConvertir" class="nose">Convertir</button> 
            </form>
            <p class="text2" id="resultadoConversion"></p>
        </div>
    </div>
    <script src="public/js/funciones2.js"></script>
</body>
</html>
