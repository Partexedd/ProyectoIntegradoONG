
document.addEventListener('DOMContentLoaded', () => {

    let imagesPopUp = document.getElementById('imagenPopUp');
    let imagesPopUp2 = document.getElementById('imagenPopUp2');
    let imagesPopUp3 = document.getElementById('imagenPopUp3');

    imagesPopUp.addEventListener('click', cancelarScroll);
    imagesPopUp2.addEventListener('click', cancelarScroll);
    imagesPopUp3.addEventListener('click', cancelarScroll);

    let textoImagenPopUp = document.getElementById('desAcScroll');
    let textoImagenPopUp2 = document.getElementById('desAcScroll2');
    let textoImagenPopUp3 = document.getElementById('desAcScroll3');

    textoImagenPopUp.addEventListener('click', cancelarScroll);
    textoImagenPopUp2.addEventListener('click', cancelarScroll);
    textoImagenPopUp3.addEventListener('click', cancelarScroll);

    function cancelarScroll() {
        debugger
        let body = document.getElementsByTagName("BODY")[0];
        body.style.overflow = 'hidden';
    }

    let cerrar = document.getElementById('cerrar');
    let cerrar2 = document.getElementById('cerrar2');
    let cerrar3 = document.getElementById('cerrar3');

    cerrar.addEventListener('click', ponerSrcoll);
    cerrar2.addEventListener('click', ponerSrcoll);
    cerrar3.addEventListener('click', ponerSrcoll);

    function ponerSrcoll() {
        let body = document.getElementsByTagName("BODY")[0];
        body.style.overflow = 'auto';
    }
});