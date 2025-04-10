function Promedio() {

    const notas = document.getElementById('notas').value;
    const nota_ind = document.getElementById('nue_in');

    for (let index = 1; index <= notas; index++) {

        nota_ind.insertAdjacentHTML('beforeend', `<label for="nota${index}">Ingrese la Nota ${index}: <input type="number" name="nota${index}" id="nota${index}" max="20" required placeholder="Ingrese la Nota ${index}"></label>
        <br><br>`);

    }

    document.getElementById('boton').style = 'display:none;';
    document.getElementById('boton_submit').style = 'display:inline-block;';

}

function BorrarCampo() {
    const nota_ind = document.getElementById('nue_in');
    nota_ind.innerHTML = '';
    document.getElementById('boton').style = 'display:inline-block;';
    document.getElementById('boton_submit').style = 'display:none;';
}

document.getElementById('boton').addEventListener('click', Promedio);
document.getElementById('Borrar').addEventListener('click', BorrarCampo);

document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");

    // Cancela el evento submit al presionar Enter
    form.addEventListener("keydown", (event) => {
        if (event.key === "Enter") {
            event.preventDefault(); // Cancela el comportamiento predeterminado
            console.log("El evento submit ha sido cancelado al presionar Enter.");
        }
    });
});

