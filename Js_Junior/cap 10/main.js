const send = document.getElementById('btn');

send.addEventListener("click", ()=> {
    let resultado, mensaje;
    try {
        resultado = parseInt( document.getElementById('nota-alumno').value);
        mensaje = "sin errores";
    } catch (e) {
        resultado = "Error";
        mensaje ="He descubierto el error"; 
    }
    abrir(resultado,mensaje); 

})

const abrir = (res, msg)=>{
    console.log(msg);
    console.log(res);
}

