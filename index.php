<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="estilos.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .writing {
            white-space: nowrap; /* Para que el texto no se rompa */
            overflow: hidden; /* Ocultar texto que aún no se muestra */
            display: inline-block;
            border-right: 2px solid #333; /* Cursor parpadeante */
            animation: blink 0.7s step-end infinite;
        }
        @keyframes blink {
            from, to {
                border-color: transparent;
            }
            50% {
                border-color: #333;
            }
        }   
    </style>
</head>
<script type="text/javascript">
    function fncInit(){
        $("body").css("opacity","100%");
        $("#contenidoNav").css("opacity","1");

        // Sirve para cargar el texto de introducción
        const elements = document.querySelectorAll(".writing");
        elements.forEach((el, i) => {
            setTimeout(() => typeEffect(el, 100,i), i * 2700); // Retardo entre elementos
        });

        // Sirve para hacer scroll
        document.querySelectorAll('nav div a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href'); // Obtener el id del destino
                const targetElement = document.querySelector(targetId);
                targetElement.scrollIntoView({
                    behavior: 'smooth' // Scroll suave
                });
            });
        });
    }
    function typeEffect(element, speed, i) {
        const text = element.getAttribute("data-text");
        let index = 0;
        const interval = setInterval(() => {
            element.textContent += text[index];
            index++;

            if (index === text.length) {
                clearInterval(interval); // Detener el intervalo cuando termine el texto
                element.classList.remove("writing"); // Opcional: eliminar el cursor
            }
        }, speed);
        if(i == 2){
            $("#cv").css("opacity","1");
        }
    }
    function fncAbrirCV(){
        window.open("repositorio/CV_Currículum_Vitae_Manuel_André_Valdayo_Bricaud.pdf","_blank");
    }
    // Detectar el evento de scroll
    window.addEventListener("scroll", () => {
        const texto = document.getElementById("contenidoInicio");
        const nav = document.getElementById("navegador");
        const cv = document.getElementById("cv");
        const scrollPosition = window.scrollY; // Cuántos píxeles se ha desplazado
        const hideAfter = 150; // Posición donde el texto desaparecerá (en píxeles)
        const showAfter = 50; // Posición donde el texto desaparecerá (en píxeles)
        const formacion = 1459;
        if(scrollPosition > showAfter){
            // if(scrollPosition < formacion){
                nav.style.background = "#030786";
            // }else{
            // nav.style.background = "#03078600";   
            // }
        }else{
            nav.style.background = "#03078600";
        }
        if (scrollPosition > hideAfter) {
            texto.style.opacity = "0"; // Ocultar con transición
            cv.style.opacity = "0"; // Ocultar con transición
        } else {
            texto.style.opacity = "1"; // Volver a mostrar
            cv.style.opacity = "1"; // Volver a mostrar
        }
    });

    // Aplicar el efecto a cada elemento con la clase .writing
    // document.addEventListener("DOMContentLoaded", () => {

    // });

</script>
<body onload="fncInit();">
    <div id="contenido">
        <nav id="navegador" class="navegador">
            <div id="contenidoNav" hidden>
                <strong><div class="slide"><a href="#inicio">Inicio</a></div></strong>
                <strong><div class="slide"><a href="#sobre-mi" class="btnNav">Sobre mí</a></div></strong>
                <strong><div class="slide"><a href="#formacion" class="btnNav">Formación</a></div></strong>
                <strong><div class="slide"><a href="#conocimientos" class="btnNav">Conocimientos técnicos</a></div></strong>
            </div>
        </nav>
        <section>
            <div id="inicio">
                <div id="contenidoInicio">
                    <p id="parrafo-1" class="writing" data-text="Hola, mi nombre es"></p>
                    <h1 id="parrafo-2" class="writing" data-text="Manuel André Valdayo Bricaud"></h1>
                    <p id="parrafo-3" class="writing" data-text="Y soy Ingeniero"></p>
                </div>
                <div id="cv" class="pulse" onclick="fncAbrirCV();">
                    <p>Descargar CV</p>
                </div>
            </div>
        </section>
        <section>
            <div id="sobre-mi">
                <div class="cabeceraSeccion">
                    <h1 style="color: black;">Sobre mí</h1>
                </div>
                <div class="perfil">
                    <div id="imgPerfil" class="imgEfect">
                        <img src="imagenes/foto_mia.jpg" alt="">
                        <div class="wrapper">
                        <div class="icon facebook">
                            <div class="tooltip">Linkedin</div>
                            <span><a class="linkedinIcon" href="https://www.linkedin.com/in/andres-valdayo-11a104139/"><i class="fab fa-linkedin-in"></i></a></span>
                        </div>
                        <div class="icon twitter">
                            <div class="tooltip">Email</div>
                            <span><a class="emailIcon" href="andresvaldayo@gmail.com"><i class="fas fa-envelope"></i></a></span>
                        </div>
                        <div class="icon github">
                            <div class="tooltip">Github</div>
                            <span><a class="githubIcon" href="https://github.com/ManuelAndreValdayo"><i class="fab fa-github"></i></a></span>
                        </div>
                    </div>
                    </div>
                    <div class="contenidoPerfil">
                        <div>
                            <p id="p1"><b>Estudiante de Ingeniería Informática UCLM</b></p>
                            <p id="p2">Ayudar, aprender y tecnología son las 3 palabras que mejor me definen, se dialogar y establecer buenos vínculos con la gente y siempre estoy dispuesto a echar una mano.</p>
                            <p id="p3">Ingeniero informático disciplinado, proactivo y trabajador, con casi 2 años de experiencia en el desarrollo de aplicaciones y soluciones web para PYMES. Destaco por mi capacidad de aprendizaje rápido, trabajo en equipo y compromiso con la entrega de resultados de calidad.</p>
                        </div>
                        <div class="contenedorPastillas">
                            <div class="pastillas">
                                <p><b>TRABAJADOR</b></p>
                            </div>
                            <div class="pastillas">
                                <p><b>DISCIPLINADO</b></p>
                            </div>
                            <div class="pastillas">
                                <p><b>CREATIVO</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div id="formacion">
                <div class="cabeceraSeccion">
                    <h1>Formación</h1>
                </div>
                <div class="column">
                    <div class="contenedorFormacion">
                        <p>En esta sección se presenta la trayectoria académica y profesional de Manuel André Valdayo Bricaud, incluyendo su formación oficial, capacitación complementaria, experiencia laboral y actividades de voluntariado. Un recorrido que refleja su desarrollo académico y su compromiso social.</p>
                        <h3 class="resumenFormacion">RESUMEN</h3>
                        <div class="resume-item pb-0">
                            <h4>Manuel André Valdayo Bricaud</h4>
                            <p><em>Estudiante de Ingeniería Informática con una sólida motivación para adquirir conocimientos y maximizar mi potencial profesional. Interesado/a en áreas como la gestión de proyectos, el desarrollo web y desarrollo de aplicaciones multiplataforma, con el objetivo de contribuir de manera efectiva al éxito de los proyectos tecnológicos.</em></p>
                        </div>
                        <h3 class="resumenFormacion">EXPERIENCIA PROFESIONAL</h3>
                        <div class="resume-item pb-0">
                            <h4>Junior Web Application Developer</h4>
                            <div class="resume-content">
                                <h5 itemprop="startDate"> Marzo 2023 - Actualidad</h5>
                                <img class="logoFormacion" src="imagenes/logo_solisyon2.svg" alt="">
                            </div>
                            <p><em>Desarrollador de aplicaciones web con experiencia en la implementación e integración de soluciones tecnológicas avanzadas, como sistemas CRM (Gestión de Relaciones con Clientes) y ERP (Planificación de Recursos Empresariales). Especializado en procesos de digitalización empresarial, optimizando operaciones y mejorando la eficiencia mediante el diseño y desarrollo de plataformas web personalizadas. Las soluciones desarrolladas se han aplicado principalmente a pequeñas y medianas empresas (PYMES), pero también han sido adaptadas con éxito para satisfacer las necesidades de organizaciones de mayor envergadura</em></p>
                        </div>
                        <h3 class="resumenFormacion">FORMACIÓN OFICIAL</h3>
                        <div style="display: flex;">
                            <div class="resume-item pb-0" style="width: 50%;">
                                <h4>Actualmente cursando Ingeniería informática</h4>
                                <div class="resume-content">
                                    <h5 itemprop="startDate"> 2019 - Actualidad</h5>
                                </div>
                                <p itemprop="provider">
                                <em>
                                    <a href="https://esi.uclm.es/" target="_blank" style="color:white; text-decoration: underline;" itemprop="url">Escuela Superior de Informática</a>, 
                                    <a href="https://www.uclm.es/" target="_blank" style="color:white; text-decoration: underline;" itemprop="url">Universidad de Castilla-La Mancha</a>, 
                                    Ciudad Real
                                </em>
                                </p>       
                                <p itemprop="description">Especialidad <a href="https://esi.uclm.es/index.php/grado-en-ingenieria-informatica/plan-de-estudios/" target="_blank" style="color:white; text-decoration: underline;" itemprop="url">Tecnologías de la Información</a>.</p>                            

                            </div>
                            <div class="resume-item pb-0" style="width: 50%;">
                                <h4>BACHILLERATO LOMCE</h4>
                                <div class="resume-content">
                                    <h5 itemprop="startDate"> 2017-2019</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div id="conocimientos">
                <div class="cabeceraSeccion">
                    <h1>Conocimientos técnicos</h1>
                </div>
                <div class="grid-item-lenguajes" data-aos="zoom-in" data-aos-duration="1000">
                    <div  id="contenedor-grid-lenguajes-1"  class="contenedor-grid-lenguajes imgEfect">
                        <h3>Lenguajes de programación</h3>
                        <div class="grid-lenguajes">
                            <div class="item">
                                <div class="item-wrapper">
                                    <img class="img-vertical" src="imagenes/java.png" alt="java">
                                    <p>Java</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-wrapper">
                                    <img class="img-vertical" src="imagenes/csharp.png" alt="c sharp">
                                    <p>C#</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-wrapper">
                                    <img class="img-vertical" src="imagenes/python.png" alt="python">
                                    <p>Python</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-wrapper">
                                    <img class="img-vertical" src="imagenes/c.png" alt="c">
                                    <p>C</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-wrapper">
                                    <img class="img-vertical" src="imagenes/php.png" alt="php">
                                    <p>PHP</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-wrapper">
                                    <img class="img-vertical" src="imagenes/visualbasic.png" alt="visual basic">
                                    <p>Visual Basic</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contenedor-grid-lenguajes-2" class="contenedor-grid-lenguajes imgEfect">
                        <h3>Desarrollo web</h3>
                        <div class="grid-lenguajes">
                            <div class="item">
                                <div class="item-wrapper">
                                    <img class="img-vertical" src="imagenes/html.png" alt="HTML">
                                    <p>HTML</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-wrapper">
                                    <img class="img-vertical" src="imagenes/css.png" alt="CSS">
                                    <p>CSS</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-wrapper">
                                    <img class="img-vertical" src="imagenes/js.png" alt="JavaScript">
                                    <p>JavaScript</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-wrapper">
                                    <img class="img-vertical" src="imagenes/spring.png" alt="Spring">
                                    <p>spring</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contenedor-grid-lenguajes-3" class="contenedor-grid-lenguajes imgEfect">
                        <h3>Frameworks</h3>
                        <div class="grid-lenguajes">
                            <div class="item">
                                <div class="item-wrapper">
                                    <img class="img-vertical" src="imagenes/wpf.png" alt="WPF">
                                    <p>WPF</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-wrapper">
                                <img class="img-vertical" src="imagenes/net.png" alt=".NET">
                                <p>.NET</p>
                            </div>
                            </div>
                            <div class="item">
                                <div class="item-wrapper">
                                <img class="img-vertical" src="imagenes/uwp.png" alt="UWP">
                                <p>UWP</p>
                            </div>
                            </div>
                            <div class="item">
                                <div class="item-wrapper">
                                    <img class="img-vertical" src="imagenes/maven.png" alt="MAVEN">
                                    <p>MAVEN</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>