


let turno = "X";
let juegoActivo = true;

const celdas = Array.from(document.querySelectorAll(".celda"));
const botonJugar = document.getElementById("boton-jugar");
const botonReiniciar = document.getElementById("boton-reiniciar");
const divMensaje = document.getElementById("mensaje");

botonReiniciar.addEventListener("click", reiniciarJuego);
botonJugar.addEventListener("click", jugarTurno);

function jugarTurno() {
  if (!juegoActivo) return;

  const celdaSeleccionada = celdas.find(celda => celda.value === "X");
  if (!celdaSeleccionada) {
    alert("selecciona una casilla para colocar tu 'X'.");
    return;
  }

  if (celdaSeleccionada.value !== "X") {
    alert("coloca tu 'X' en una casilla vacía.");
    return;
  }

  colocarO();
}

function colocarO() {
  const celdasVacias = celdas.filter(celda => !celda.value);
  if (celdasVacias.length > 0) {
    const celdaAleatoria = celdasVacias[Math.floor(Math.random() * celdasVacias.length)];
    celdaAleatoria.value = "O";
    turno = "X"; 
    verificarGanador();
  }
}
function verificarGanador() {
  const patronesGanadores = [
    [0, 1, 2],
    [3, 4, 5], 
    [6, 7, 8], 
    [0, 3, 6], 
    [1, 4, 7], 
    [2, 5, 8], 
    [0, 4, 8], 
    [2, 4, 6], 
  ];

  for (let patron of patronesGanadores) {
    const [a, b, c] = patron;
    if (celdas[a].value && celdas[a].value === celdas[b].value && celdas[a].value === celdas[c].value) {
      juegoActivo = false;
      divMensaje.textContent = `${celdas[a].value} ha ganado!`;
      return;
    }
  }

  if (celdas.every(celda => celda.value)) {
    divMensaje.textContent = "¡empate!";
  } else {
    divMensaje.textContent = `turno de ${turno}`;
  }
}

function reiniciarJuego() {
  celdas.forEach(celda => celda.value = "");
  juegoActivo = true;
  divMensaje.textContent = "";
  turno = "X";
}

function red1(){
    window.location.href = 'http://localhost/Parcial2DW/CVistas';
}

function red2(){
    window.location.href = 'http://localhost/Parcial2DW/CForms';
}