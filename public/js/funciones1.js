document.getElementById("reducir").addEventListener("click", function (event) {
    event.preventDefault(); 
    const contadorInput = document.getElementById("contador");
    let contador = parseInt(contadorInput.value, 0);

    if (contador > 0) {
        contador--;
        contadorInput.value = contador;
    } else {
        alert("El contador no puede bajar de 0.");
    }
});

document.getElementById("incrementar").addEventListener("click", function (event) {
    event.preventDefault(); 
    const contadorInput = document.getElementById("contador");
    let contador = parseInt(contadorInput.value, 0);

    if (contador < 20) {
        contador++;
        contadorInput.value = contador;
    } else {
        alert("Redirigiendo");
        window.location.href =  "http://localhost/Parcial2DW/CForms"; 
    }
});
