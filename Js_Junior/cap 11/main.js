const materiasHTML = document.querySelector(".materias");

const materias = [
    {
        nombre: "Fisica 1",
        nota: "1"
    },
    {
        nombre: "Fisica 2",
        nota: "3"
    },
    {
        nombre: "Fisica 3",
        nota: "7"
    },
    {
        nombre: "Fisica 4",
        nota: "9"
    },
    {
        nombre: "Fisica 5",
        nota: "1"
    }
]

const obtenermat = (id) => {
    return new Promise((resolve, reyect) => {
        let materia = materias[id];
        if (materia == undefined) {
            reyect("No existe la materia");
        } else {
            setTimeout(() => { resolve(materia) }, Math.random() * 480);
        }

    })
}

const devolver = async () => {
    let mat = [];
    for (var i = 0; i < materias.length; i++) {
        mat[i] = await obtenermat(i);
        let newHTML = `        
        <div class="materia">
        <div class="nombre">${mat[i].nombre}</div>
        <div class="nota">${mat[i].nota}</div>
        </div>`;
        materiasHTML.innerHTML += newHTML;
    }
}

devolver();