<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cotizador-EMCOM</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <header>
        <section>
            <div class="container-hero">
                <div class="container hero">
                    <div class="container-logo">
                        <a class="logo" href="/"><img src="images/Logo EMCOM.png" width="200">
                    </div>
                    <div class="container-navbar">
                        <nav class="navbar container">
                            <ul class="menu">
                                <li><a href="servicios.html">Servicios</a></li>
                                <!--<li><a href="#">Cursos</a></li>--->
                                <li><a href="formulario.php">Cotiza con nosotros</a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=56950082437"><img src="images/whatsapp.png" alt="whatsapp"></a></li>
                                <li><a href="https://www.instagram.com/emprendecomex/"><img src="images/instagram.png" alt="instagram"></a></li>
                                <li><a href="https://www.youtube.com/@emprendecomex6609/videos"><img src="images/youtube.png" alt="youtube"></a></li>
                                <li><a href="https://www.facebook.com/profile.php?id=100063898185610"><img src="images/facebook.png" alt="facebook"></a></li>
                            </ul>
                        </nav>
                    </div> 
                </div>
            </div>
        </section>
    </header>
    
    <main class="form">
        <form class="formularios-form" id="formulario-completo" method="post">
            <div class="form1">
                <h2>Cotizador</h2>
                <div class="columna">
                    <label for="name">Nombre</label>
                    <input type="text" name="nombre" id="name" required>
                </div>
                
                <div class="columna">
                    <label for="email">Correo electrónico</label>
                    <input type="text" name="correo" id="email" required>
                </div>

                <div class="columna">
                    <label for="phone">Teléfono</label>
                    <input type="tel" name="telefono" id="phone" required>
                </div>
                
                <div class="columna">
                    <label for="categoria">Servicio</label>
                    <select name="categoria" id="categoria">
                        <option value="">-- Seleccionar opción --</option>
                        <option value="importacion">Importación</option>
                        <option value="training">Capacitación</option>
                        <option value="certification">Certificación</option>
                        <option value="laws">Asesorias y Causas Legales</option>
                        <option value="countable">Contabilidad</option>
                    </select>
                </div>
            </div>
            
            <div class="form2"><!--================= Importacion ================-->
                <div id="section-importacion" class="hidden">
                    <div class="form2-content">
                        <div class="columna2">
                            <label for="pais">País</label>
                            <select name="pais" id="pais" required>
                                <option selected disabled value="">-- Seleccionar opción --</option>
                                <option value="china">China</option>
                                <option value="eeuu">EEUU</option>
                                <option value="oriente">Medio Oriente</option>
                                <option value="argentina">Argentina</option>
                                <option value="colombia">Colombia</option>
                                <option value="peru">Perú</option>
                            </select>
    
                            <label for="adress">dirección</label>
                            <input type="text" name="dirección" id="adress" required>
    
                            <label for="city">ciudad</label>
                            <input type="text" name="ciudad" id="city" required>
    
                            <label for="enterprise">empresa</label>
                            <input type="text" name="empresa" id="enterprise" required>
    
                            <label for="merch">Tipo de mercancia</label>
                            <input type="text" name="mercancia" id="merch" required>
    
                            <label for="clausula">Cláusula de Compra</label>
                            <select name="clausula" id="clausula" required>
                                <option selected disabled value="">-- Seleccionar opción --</option>
                                <option value="exw">EXW</option>
                                <option value="fob">FOB</option>
                                <option value="fca">FCA</option>
                                <option value="cif">CIF</option>
                                <option value="ddp">DDP</option>
                                <option value="dap">DAP</option>
                            </select>
    
                            <label for="valor">Valor mercancia</label>
                            <input type="number" name="valor" id="valor" required>
    
                            <label for="kilos">Kilos brutos</label>
                            <input type="number" name="kilos" id="kilos" required>
    
                            <label for="carga">Carga</label>
                            <select name="carga" id="carga" required>
                                <option selected disabled value="">-- Seleccionar opción --</option>
                                <option value="lcl">LCL</option>
                                <option value="flc">FLC</option>
                            </select>
    
                            <label for="kilos">Dirección de retiro de carga en el exterior</label>
                            <input type="text" name="kilos" id="kilos" required>
    
                            <label for="clausula">Medio de transporte</label>
                            <select name="clausula" id="clausula" required>
                                <option selected disabled value="">-- Seleccionar opción --</option>
                                <option value="aire">Aereo</option>
                                <option value="mar">Marítimo</option>
                                <option value="tierra">Terrestre</option>
                            </select>
    
                            <label for="clausula">Nesecita seguro</label>
                            <select name="clausula" id="clausula" required>
                                <option selected disabled value="">-- Seleccionar opción --</option>
                                <option value="yes">Si</option>
                                <option value="no">No</option>
                            </select>
    
                            <label for="clausula">¿Cuenta con certificado de origen?</label>
                            <select name="clausula" id="clausula" required>
                                <option selected disabled value="">-- Seleccionar opción --</option>
                                <option value="yes2">Si</option>
                                <option value="no2">No</option>
                            </select>
    
                            <label for="clausula">¿Nesecita flete interno?</label>
                            <select name="clausula" id="clausula" required>
                                <option selected disabled value="">-- Seleccionar opción --</option>
                                <option value="yes3">Si</option>
                                <option value="no3">No</option>
                            </select>
    
                            <label for="detalles-curso">Detalles adicionales</label>
                            <textarea name="detalles" id="detalles" cols="30" rows="10" maxlength="1050"></textarea> <!-- 1050 caracteres --->
    
                            <button type="submit">Enviar</button>
                        </div>
                    </div>
                </div>
                <!--================= Capacitación ================-->
                <div id="section-training" class="hidden">
                    <div class="form2-content">
                        <div class="columna2">
                            <label for="detalles-curso">Detalles</label>
                            <textarea name="detalles" id="detalles" cols="30" rows="10" maxlength="1050" required></textarea>
                            <button type="submit">Enviar</button>
                        </div>
                    </div>
                </div>
                <!--================= Certificación ================-->
                <div id="section-certification" class="hidden">
                    <div class="form2-content">
                        <div class="columna2">
                            <label for="detalles-curso">Detalles</label>
                            <textarea name="detalles" id="detalles" cols="30" rows="10" maxlength="1050" required></textarea>
                            <button type="submit">Enviar</button>
                        </div>
                    </div>
                </div>
                <!--================= Asesorias ================-->
                <div id="section-laws" class="hidden">
                    <div class="form2-content">
                        <div class="columna2">
                            <label for="detalles-curso">Detalles</label>
                            <textarea name="detalles" id="detalles" cols="30" rows="10" maxlength="1050" required></textarea>
                            <button type="submit">Enviar</button>
                        </div>
                    </div>
                </div>
                <!--================= Contables ================-->
                <div id="section-countable" class="hidden">
                    <div class="form2-content">
                        <div class="columna2">
                            <label for="detalles-curso">Detalles</label>
                            <textarea name="detalles" id="detalles" cols="30" rows="10" maxlength="1050" required></textarea>
                            <button type="submit">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>      
    <!--================= Footer y barra móvil ================-->
                
    <div class="barra">
            <div class="direccion">
                <p>Av. Nueva Providencia 1363. oficina 1102 (visitas previa coordinación) | +56 9 5008 2437</p>
            </div>
            <div class="redes">
            <ul class="container-redes">
                <li><a href="https://api.whatsapp.com/send?phone=56950082437"><img src="images/whatsapp-circle.png" alt="ws"></a></li>
                <li><a href="https://www.instagram.com/emprendecomex/"><img src="images/instagram-circle.png" alt="ws"></a></li>
                <li><a href="https://www.youtube.com/@emprendecomex6609/videos"><img src="images/youtube-circle.png" alt="ws"></a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100063898185610"><img src="images/facebook-circle.png" alt="ws"></a></li>
            </ul>
        </div>
        <div class="cotizar-bottom">
            <a href="formulario.php">Cotiza aquí</a>
        </div>
        <div class="subir-button">
            <a href="#"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
                <ellipse cx="12" cy="12" rx="10.5" ry="10.5" fill="#007cdc" />
                <path d="M15.5,12L12,8L8.5,12" stroke="#ffffff" stroke-width="1" stroke-linecap="round"
                stroke-linejoin="round" />
                <path d="M15.5,17L12,13L8.5,17" stroke="#ffffff" stroke-width="1" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg></a>
        </div>
    </div>
    <footer class="footer">
        <div class="container container-footer">
            <p>Copyright © 2024 EMCOM | Funciona con EMCOM</p>
        </div>
    </footer>
    <script src="script3.js"></script>
        
    <script>
        const categoriaSelect = document.getElementById('categoria');
        const form = document.getElementById('formulario-completo');
        const sections = document.querySelectorAll('.form2 > div');  // Todas las secciones secundarias
    
        // Función para mostrar u ocultar secciones y habilitar/deshabilitar campos
        const toggleSections = () => {
            sections.forEach(section => {
                const inputs = section.querySelectorAll('input, select, textarea');
                if (section.classList.contains('hidden')) {
                    inputs.forEach(input => {
                        input.disabled = true;  // Desactiva campos
                    });
                } else {
                    inputs.forEach(input => {
                        input.disabled = false;  // Activa campos visibles
                    });
                }
            });
        };
    
        // Mostrar la sección correspondiente según la categoría seleccionada
        categoriaSelect.addEventListener('change', () => {
            sections.forEach(section => {
                section.classList.add('hidden');  // Oculta todas las secciones
            });
    
            const selectedSection = document.getElementById(`section-${categoriaSelect.value}`);
            if (selectedSection) {
                selectedSection.classList.remove('hidden');  // Muestra la sección seleccionada
            }
    
            toggleSections();
        });
    </script>
    <?php
    include("enviar.php");
    ?>
</body>
</html>