function validar(){
    var usuario= document.getElementById("Usuario").value;

    var clave= document.getElementById("Clave").value;

    if(usuario == "KeynerManchay" && clave =="12345"){
        window.location="MenuFondo.html";
    }else{
        alert("Usuario o Clave son Incorrectos");
        //location.href="MenuFondo.html";
        //document.location.href= MenuFondo.html;
        //parent.location= MenuFondo.html;
        //window.location.href= MenuFondo.html;
    }
}