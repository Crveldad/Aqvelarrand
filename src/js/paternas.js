let contador = 25;
let total = 0;

function sumar(id) {
    let valor = document.getElementById(id);
    let max = parseInt(valor.getAttribute("max"));
    let n = parseInt(valor.value);
    if (n < max && contador > 0) {
        n += 1;
        valor.value = n;
        total++;
        contador--;
        document.getElementById("total").innerText = total;
    }
}

function restar(id) {
    let valor = document.getElementById(id);
    let min = parseInt(valor.getAttribute("min"));
    let n = parseInt(valor.value);
    if (n > min && contador < 25) {
        n -= 1;
        valor.value = n;
        total--;
        contador++;
        document.getElementById("total").innerText = total;
    }
}