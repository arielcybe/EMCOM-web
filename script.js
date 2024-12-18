/**============================================
 *          Botones de desplazamiento
 *=============================================**/
const containerServicios = document.querySelector('.container-categories');
const buttonLeft = document.querySelector('.button-left');
const buttonRight = document.querySelector('.button-right');

// Calcula el ancho de una tarjeta (100% del viewport)
const cardWidth = containerServicios.offsetWidth;

buttonLeft.addEventListener('click', () => {
    containerServicios.scrollBy({ left: -cardWidth, behavior: 'smooth' });
});

buttonRight.addEventListener('click', () => {
    containerServicios.scrollBy({ left: cardWidth, behavior: 'smooth' });
});
/**============================================
 *               Barra Móvil
 *=============================================**/
let barraMovil = document.querySelector('.barra');

window.addEventListener('scroll', function(){
    
    if(window.scrollY > 0){
        barraMovil.classList.add('active');
    }
    if(window.scrollY == 0){
        barraMovil.classList.remove('active');
    }
})

// Elementos del DOM
const categoriaSelect = document.getElementById('categoria');
const sectionImportacion = document.getElementById('section-importacion');

// Evento para cambiar la visibilidad del campo de país
categoriaSelect.addEventListener('change', () => {
    if (categoriaSelect.value === 'importacion') {
        sectionImportacion.classList.remove('hidden');
    } else {
        sectionImportacion.classList.add('hidden');
    }
});
