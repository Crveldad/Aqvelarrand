const max = 20;
const maxTotal = 100;
let total = 0;
puntosTotal();

function sumar(id) {
    let valor = document.getElementById(id);
    let n = parseInt(valor.value);
    if (n < max && total < maxTotal) {
        n += 1;
        valor.value = n;
        puntosTotal();
    }
}

function restar(id) {
    let valor = document.getElementById(id);
    let min = parseInt(valor.getAttribute("min"));
    let n = parseInt(valor.value);
    if (n > min) {
        n -= 1;
        valor.value = n;
        puntosTotal();
    }
}

function puntosTotal() {
    let caracteristicas = document.getElementsByClassName("car");
    total = 0;

    for (const element of caracteristicas) {
        total += parseInt(element.value);
        //console.log(parseInt(element.value), total);
    };
    document.getElementById("total").innerText = total;
}