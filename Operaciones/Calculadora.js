
function setResultado(value) {
    document.getElementById('Resultado').innerHTML = value;
}

function getResultado() {
    return(document.getElementById('Resultado').innerHTML);
}

function anadir(Valor) { 
    var resultado = getResultado();
    if (resultado!='0' || isNaN(Valor)){
        setResultado(resultado + Valor);   
    }
    else setResultado(Valor);
}

function calcular() {
    var resultado = eval(getResultado()); 
    setResultado(resultado);
}

function Borrar() { 
    setResultado(0);
}