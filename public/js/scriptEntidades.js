
document.addEventListener('DOMContentLoaded', () => {

    let boton1PopUp = document.getElementById('boton1');
    let boton1PopUp2 = document.getElementById('boton2');
    let boton1PopUp3 = document.getElementById('boton3');

    boton1PopUp.addEventListener('click', cancelarScroll);
    boton1PopUp2.addEventListener('click', cancelarScroll);
    boton1PopUp3.addEventListener('click', cancelarScroll);

    function cancelarScroll() {
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