const nombre = document.getElementById("nombre");
const email = document.getElementById("correo");
const materia = document.getElementById("materia");
const boton = document.getElementById("enviar");
const resultado = document.querySelector(".resultado");

boton.addEventListener("click", (e)=>{
    e.preventDefault();
    let error = validarCampos();
    if (error[0]) {
        resultado.innerHTML= error[1];
        resultado.classList.add("red");
    }
    else{
        resultado.innerHTML= "Sin problemas";
        resultado.classList.add("green");
    }
})

const validarCampos = () =>{
    let erore = [];
    if (nombre.value.length < 5 ) {
        erore[0]=true;
        erore[1]="El nombre  tiene menos de 5 caracteres"
        return erore;
    }else if (nombre.value.length > 40) {
        erore[0]=true;
        erore[1]="El nombre  tiene mas de 40 caracteres"
        return erore;
    }else if (email.value.length < 5 ||email.value.length > 40 || 
              email.value.indexOf("@") == -1 || email.value.indexOf(".") == -1) {
        erore[0]=true;
        erore[1]="El email es invalido"
        return erore;
    } else if (materia.value.length < 4 ||materia.value.length > 40) {
        erore[0]=true;
        erore[1]="Materia invalida"
        return erore;
    }
    
    erore[0]=false;
    return erore;

}
