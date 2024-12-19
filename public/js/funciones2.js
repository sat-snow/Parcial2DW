document.getElementById("botonConvertir").addEventListener("click", function () {
    const cantidad = parseFloat(document.getElementById("cantidad").value);
    const monedaOrigen = document.getElementById("monedaOrigen").value;
    const monedaDestino = document.getElementById("monedaDestino").value;

    if (isNaN(cantidad) || cantidad <= 0) {
        alert("Ingrese una cantidad válida");
        return;
    }

    if (monedaOrigen === monedaDestino) {
        alert("No se permite la conversión entre la misma moneda.");
        return;
    }

    const tasasDeCambio = {
        USD: { EUR: 0.96, USD: 1 },
        EUR: { USD: 1.04, EUR: 1 },
    };

    const tasa = tasasDeCambio[monedaOrigen][monedaDestino];
    

    const resultado = (cantidad * tasa).toFixed(2);


    document.getElementById("resultadoConversion").textContent = 
        `${cantidad} ${monedaOrigen} = ${resultado} ${monedaDestino}`;


    if (resultado >= 500) {
        alert("Redirigiendo");
        window.location.href = "http://localhost/Parcial2DW/CResultado"; 
    }
});
