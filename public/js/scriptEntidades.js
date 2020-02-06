
document.addEventListener('DOMContentLoaded', () => {

    let imagesPopUp = document.getElementById('imagenPopUp');

    imagesPopUp.addEventListener('click', cancelarScroll);

    function cancelarScroll() {
        let body = document.getElementsByTagName("BODY")[0];
        body.style.overflow = 'hidden';
    }

    let cerrar = document.getElementById('cerrar');

    cerrar.addEventListener('click', ponerSrcoll);

    function ponerSrcoll() {
        let body = document.getElementsByTagName("BODY")[0];
        body.style.overflow = 'auto';
    }
});