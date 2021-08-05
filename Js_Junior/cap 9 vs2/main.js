alumnos = [{
    nombre: "Jhon",
    email: "jhon@gmail.com",
    materia: "fisica"
},{
    nombre: "Stiven",
    email: "Stiven@gmail.com",
    materia: "fisica1"
},{
    nombre: "Julian",
    email: "jJulian@gmail.com",
    materia: "fisica2"
}]

const btn = document.querySelector(".btn");

for (alumno in alumnos) {
    let datos = alumnos[alumno];
    let nombre = datos["nombre"];
    let email = datos["email"];
    let materia = datos["materia"];
    let htmlcode = 
    `<div class="nombre grid-item">${nombre}</div>
    <div class="email grid-item">${email}</div>
    <div class="materia grid-item">${materia}</div>
    <div class="semana grid-item">
        <select class="semana-elegida">
            <option value="semana 1">semana 1</option>
            <option value="semana 2">semana 2</option>
        </select>
    </div>`;
document.querySelector(".grid-container").innerHTML+= htmlcode;
}

btn.addEventListener("click", ()=>{
    let elementos = document.querySelectorAll(".semana");
    let semanase = document.querySelectorAll(".semana-elegida");
    for (elemento in elementos) {
      semana = elementos[elemento];
      semana.innerHTML = semanase[elemento].value;
    }
});