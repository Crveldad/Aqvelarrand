const maxTotal = 100;
let total = 0;

function sumar(id) {
    let valor = document.getElementById(id);
    let max = parseInt(valor.getAttribute("max"));
    let n = parseInt(valor.value);
    if (n < max && total < maxTotal) {
        n += 1;
        valor.value = n;
        total++;
        document.getElementById("total").innerText = total;
    }
}

function restar(id) {
    let valor = document.getElementById(id);
    let min = parseInt(valor.getAttribute("min"));
    let n = parseInt(valor.value);
    if (n > min) {
        n -= 1;
        valor.value = n;
        total--;
        document.getElementById("total").innerText = total;
    }
}