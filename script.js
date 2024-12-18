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

// Agregar referencia a la nueva sección
const sectionImportacion = document.getElementById('section-importacion');

// Evento para mostrar la sección correspondiente
categoriaSelect.addEventListener('change', () => {
    // Ocultar todas las secciones al inicio
    sectionImportacion.classList.add('hidden');

    // Mostrar la sección según la selección
    const seleccion = categoriaSelect.value;
    if (seleccion === 'importacion') {
        sectionImportacion.classList.remove('hidden');
   
       
    }
});
