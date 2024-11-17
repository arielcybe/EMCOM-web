/**============================================
 *          Botones de desplazamiento
 *=============================================**/
const containerServicios = document.querySelector('.container-servicios');
const buttonLeft = document.querySelector('.button-left');
const buttonRight = document.querySelector('.button-right');

buttonLeft.addEventListener('click', () => {
    containerServicios.scrollBy({ left: -300, behavior: 'smooth' });
});

buttonRight.addEventListener('click', () => {
    containerServicios.scrollBy({ left: 300, behavior: 'smooth' });
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