function operacionSeleccionada(valorSeleccionado) {
    let numero1 = document.getElementById("number1");
    let numero2Label = document.getElementById("labelNumber2");
    let numero2 = document.getElementById("number2");

    console.log(valorSeleccionado);


    switch (valorSeleccionado) {
        case "suma": case "resta": case "mult": case "div":
            numero2.setAttribute("required", "required");
            numero2Label.style.display = "inline-block";
            numero2.style.display = "inline-block";
            break;
        case "par/impar": case "fact": case "fibo": case "bis": case "primo": case "cubo": case "cuadrado":
            numero1.removeAttribute("max");
            numero2.removeAttribute("required");
            numero2Label.style.display = "none";
            numero2.style.display = "none";
            break;
    }
}

operacionSeleccionada(document.getElementById("operation").value);