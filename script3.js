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