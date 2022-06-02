
let btnHorario = document.getElementById("hrr");
btnHorario.onclick = cargarHorario;
function cargarHorario() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            datos = JSON.parse(xmlhttp.responseText);
            console.log(datos.length);
            //tabla
            for (let i = 0; i < datos.length; i++) {
                table += "<tr><td>" +
                    datos[i].Dia +
                    "</td><td>" +
                    datos[i].Material +
                    "</td><td>" +
                    datos[i].Materia2 +
                    "</td><td>" +
                    datos[i].Materia3 +
                    "</td><td>" +
                    datos[i].Profesorl +
                    "</td><td>" +
                    datos[i].Profesor2 +
                    "</td></tr>";
            }
            document.getElementById("demo-1").innerHTML = table;
        }
    }

    xmlhttp.open("GET", "Json/Horario.json");
    xmlhttp.send();
}
