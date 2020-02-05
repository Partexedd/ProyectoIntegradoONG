document.addEventListener('DOMContentLoaded', () => {
    let dirButton = document.getElementById("direccion");
    dirButton.addEventListener("click", (event) => {
        if (event.target.id == "but1") {
            let divDir1 = document.getElementById("divDir1")
            let but1 = document.getElementById('but1')
            if (divDir1.textContent != "") {
                divDir1.textContent = ""
                but1.textContent="Ver dirección"
            }else{
                divDir1.textContent = "C/Mayor 56, escalera 3, piso 8B. 12001 - Castellón de la Plana 964 222 020 - 601 187 746"
                but1.textContent="Ver menos"
            }
        }
        if (event.target.id == "but2") {
            let divDir2 = document.getElementById("divDir2")
            let but2 = document.getElementById('but2')
            if (divDir2.textContent != "") {
                divDir2.textContent = ""
                but2.textContent="Ver dirección"
            }else{
                divDir2.textContent = "Carrer d'Utiel, 16 46020 Valencia 670 394 103"
                but2.textContent="Ver menos"
            }
        }
        if (event.target.id == "but3") {
            let divDir3 = document.getElementById("divDir3")
            let but3 = document.getElementById('but3')
            if (divDir3.textContent != "") {
                divDir3.textContent = ""
                but3.textContent="Ver dirección"
            }else{
                divDir3.textContent = "Av. de Denia, 47 03013 Alicante 965 650 487 - 660 575 104"
                but3.textContent="Ver menos"
            }
        }
    })
})