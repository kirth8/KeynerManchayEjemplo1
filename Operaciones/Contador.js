var btnElm = document.getElementById('btnClick'),
    btnClear = document.getElementById('btnClear'),
    pElm = document.getElementById('contarClick')
contar = 0;

pElm.textContent = 0;

btnElm.onclick = function () {
    contar++;
    pElm.textContent = contar;
    sbg();
}

btnClear.onclick = function () {
    pElm.textContent = 0;
    contar = 0;
    sect.style.backgroundColor = "white";
}