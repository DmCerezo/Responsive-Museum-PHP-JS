<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exposiciones Temporales</title>
    <link rel="stylesheet" href="../css/comun/styles-cabecera-footer.css">
    <link rel="stylesheet" href="../css/comun/styles-banner.css">
    <link rel="stylesheet" href="../css/styles-secciones.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
</head>
<body>
<!-- HEADER -->
    <?php
      include '/home/davidmcerezo/public_html/pe2/config.php';
      include '/home/davidmcerezo/public_html/pe2/view/cabecera.phtml';
    ?>


    <section class="presentacion">
        <div class="it-txt">
            <h1>Exposiciones Activas</h1>
        </div>
        <div class="it2-img">
            <img  src="../img/Museo-3D.png" alt="museo">
        </div>
        <div class="banner"></div>
    </section>

    <!-- Pagina principal -->
    <main>
        <section class="parent">
                <!-- Sección 0: Pintura mundialmente famosa -->
                <a href="coleccion.php" id="VerMás0">
                    <section class="section0">
                        <img src="../img/pintura-conde-de-orgaz.jpg" alt="Pintura mundialmente famosa">
                        <article>
                            <h2 class="title">Pintura mundialmente famosa</h2>
                            <p class="description">Descubre una de las pinturas más famosas del mundo y su fascinante historia.
                            <br><br><b>Disponible indefinidamente</b>
                            </p>
                        </article>
                    </section>
                </a>
                <!-- Sección 1: Especies marinas -->
                <a href="coleccion.php" id="VerMás1">
                    <section class="section1">
                        <img src="../img/img-pez-jurel.jpg" alt="Especies marinas">
                        <article>
                            <h2 class="title">Especies marinas</h2>
                            <p class="description">Explora la diversidad de especies marinas y sus hábitats en esta fascinante exposición.
                                <br><br><b>Disponible indefinidamente</b>
                            </p>
                        </article>
                    </section>
                </a>
                <!-- Sección 2: Bichos exóticos -->
                <a href="coleccion.php" id="VerMás2">
                    <section class="section2">
                        <img src="../img/img-bicho-libelula.jpg" alt="Bichos exóticos">
                        <article>
                            <h2 class="title">Bichos exóticos</h2>
                            <p class="description">Adéntrate en el mundo de los bichos más extraños y exóticos que puedas imaginar.
                                <br><br><b>Disponible indefinidamente</b>

                            </p>
                        </article>
                    </section>
                </a>
                <!-- Sección 3: Fósiles del Cretácico -->
                <a href="coleccion.php" id="VerMás3">
                    <section class="section3">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d4/Ammonite_fossil_%288606998286%29.jpg" alt="Fósiles del Cretácico">
                            <article>
                                <h2 class="title">Fósiles del Cretácico</h2>
                                <p class="description">Viaja en el tiempo y descubre los fascinantes fósiles de la era del Cretácico.
                                    <br><br><b>Disponible indefinidamente</b>

                                </p>
                            </article>
                    </section>
                </a>
                <!-- Sección 3: Fósiles del Cretácico -->
                <a href="coleccion.php" id="VerMás4">
                    <section class="section3">
                        <img src="../img/img-arquitectura-efeso.jpg" alt="Arquitectura">
                        <article>
                            <h2 class="title">Arquitectura Historica</h2>
                            <p class="description">Viaja en el tiempo y descubre los fascinantes creaciones que se hicieron en el pasado.
                                <br><br><b>Disponible indefinidamente</b>

                            </p>
                        </article>
                    </section>
                </a>
            </section>
            

    <section class="parent">
            <section class="presentacion" id="Exposiciones-temporales">
                <div class="it-txt">
                    <h1>Exposiciones Temporales</h1>
                </div>
                <div class="it2-img">
                    <img  src="../img/Museo-3D.png" alt="museo">
                </div>
                <div class="banner"></div>
            </section>
        <!-- Sección 0 temporal -->
        <a href="../html/subsecciones/subseccionIA.html" id="VerMás5">
            <section class="section0">
                <img src="../img/cuadro-midjourny-carrusel.jpg"            
                alt="pintura IA">
                <article>
                    <h2 class="title">Arte generado por AI</h2>
                    <p class="description">Te presentamos nuestras nueva coleccion de pintura generada por la Inteligencia Artifial. ¡El futuro es hoy!.
                    <br><br> <b>Disponible hasta el 2/7/2024</b></p>
                </article>
            </section>
        </a>
        <!-- Seccion 1 temporal -->
        <a href="../html/subsecciones/subseccionIA.html" id="VerMás6">
            <section class="section1">
                <img src="../img/foto-bicho-carrusel.jpg" 
                alt="Pintura conde de orgaz">
                <article>
                    <h2 class="title">Insectos con camuflaje</h2>
                    <p class="description">Descubre las fascinates insectos invisibles y todos sus perfectos camuflajes con el medio.<br><br> <b>Disponible hasta el 28/07/2024</b></p>
                </article>
            </section>
        </a>
        <!-- Seccion 2 temporal -->
        <a href="../html/subsecciones/subseccionIA.html" id="VerMás7">
            <section class="section2">
                <img src="../img/cuadro-rembrand-carrusell.jpg" 
                alt="Folsil Trilobites">
                <article>
                    <h2 class="title">Cuadros Robados</h2>
                    <p class="description">Descubre la fascinante historia que se oculta detras del Robo de un cuadro.<br><br> <b>Disponible hasta el 29/06/2024</b></p>
                </article>
            </section>
        </a>
    </section>
    </main>

    <!-- FOOTER -->
    <?php
      include '/home/davidmcerezo/public_html/pe2/view/footer.phtml';
    ?>
</body>
</html>