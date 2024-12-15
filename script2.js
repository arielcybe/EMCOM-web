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

/**============================================
 *               Desplegables
 *=============================================**/
const categoriaSelect = document.getElementById('categoria');
const sectionImport = document.getElementById('section-import');
const sectionTraining =document.getElementById('section-training')
const allSections = [sectionImport, sectionTraining];

/*================== Ocultar Todas las Secciones al Inicio =================*/
categoriaSelect.addEventListener('change', () => {
    allSections.forEach(section => section.classList.add('hidden'));
    /*================== Mostrar Seccion Específica =================*/
    
    const seleccion = categoriaSelect.value;
    if (seleccion === 'import') {
        sectionImport.classList.remove('hidden');
    }
});