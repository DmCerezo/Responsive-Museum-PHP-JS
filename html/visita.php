<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seccion de fonsiles del museo</title>
    <link rel="stylesheet" href="../css/comun/styles-cabecera-footer.css">
    <link rel="stylesheet" href="../css/comun/styles-banner.css">
    <link rel="stylesheet" href="../css/styles-visita.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
</head>
<body>
    <!-- Header -->
    <?php
      include '/home/davidmcerezo/public_html/pe2/config.php';
      include '/home/davidmcerezo/public_html/pe2/view/cabecera.phtml';
    ?>

    <!-- Pagina prrincipal -->
    <main>
            <!-- Sección de Presentación -->
            <section class="presentacion-principal">
                <div class="it-txt">
                    <h1>Visita al museo</h1>
                </div>
                <div class="it2-img">
                    <img src="https://i.pinimg.com/originals/67/63/a4/6763a47f78906bfde62f56b03376b5a9.png" alt="estrella">
                </div>
                <div class="banner"></div>
            </section>

            <!-- Mapa del Museo -->
            <section class="img-plano">
                <img src="../img/planos.jpg" alt="Interior del museo">
                <a class="t ac" href="#acuario"><p>Acuario</p></a>
                <a class="t ga" href="#arte"><p>Galería</p></a>
                <a class="t ja" href="#bichos"><p>Jardín</p></a>
                <a class="t ar" href="#fosiles"><p>Arqueología</p></a>
                <p class="info-sombra" >¡Click para visitar!</p>
            </section>

        <!-- Hall del Museo -->
        <section class="img-museo" id="hall">
            <section class="presentacion">
                <div class="it-txt">
                    <h1>Hall del museo</h1>
                </div>
                <div class="it2-img">
                    <img src="../img/Museo-3D.png" alt="plano">
                </div>
                <div class="banner"></div>
            </section>
            <img class="foto-museo" src="../img/museo-hall.jpeg" alt="Interior del museo">
            <article>
                <p>El Hall del Museo es el punto de entrada principal, donde los visitantes pueden obtener información sobre las exposiciones y comenzar su recorrido.</p>
            </article>
        </section>

        <!-- Galería de Arte -->
        <section class="galeria-arte" id="arte">
            <section class="presentacion">
                <div class="it-txt">
                    <h1>Galería de arte</h1>
                </div>
                <div class="it2-img">
                    <img src="https://png.pngtree.com/png-clipart/20231004/original/pngtree-frame-png-image_13117844.png" alt="mona lisa">
                </div>
                <div class="banner"></div>
            </section>
            <img class="foto-museo" src="https://oyster.ignimgs.com/mediawiki/apis.ign.com/animal-crossing-new-horizons/4/49/Museum_Guide_-_Art_Header.png" alt="Galería de arte">
            <article>
                <p>La Galería de Arte exhibe obras de artistas famosos y colecciones de arte de renombre mundial.</p>
            </article>
        </section>

        <!-- Sección de Paleontología -->
        <section class="seccion-paleontologia" id="fosiles">
            <section class="presentacion">
                <div class="it-txt">
                    <h1>Sección de paleontología</h1>
                </div>
                <div class="it2-img">
                    <img src="https://pabellondehistorianatural.es/wp-content/uploads/2023/05/ammonite-2541707-e1683291642421.png" alt="estrella">
                </div>
                <div class="banner"></div>
            </section>
            <img class="foto-museo" src="https://static1-es.millenium.gg/articles/9/16/95/9/@/77733-acnh-fossiles-orig-2-article_cover_bd-1.png" alt="Sección de paleontología">
            <article>
                <p>La Sección de Paleontología presenta una colección de fósiles y restos de animales prehistóricos, incluidos dinosaurios y mamuts.</p>
            </article>
        </section>

        <!-- Sección de Bichos -->
        <section class="seccion-bichos" id="bichos">
            <section class="presentacion">
                <div class="it-txt">
                    <h1>Sección de entomología</h1>
                </div>
                <div class="it2-img">
                    <img src="https://images.vexels.com/media/users/3/180656/isolated/preview/5d353d372598c0f9da79f5fa6c0fd8e4-mariquita-plana-imagen-mariquita.png" alt="estrella">
                </div>
                <div class="banner"></div>
            </section>
            <img class="foto-museo" src="https://oyster.ignimgs.com/mediawiki/apis.ign.com/animal-crossing-new-horizons/c/cb/Museum_Guide_-_Bugs_Header.png?width=1280" alt="Sección de bichos">
            <article>
                <p>La Sección de Entomología muestra una amplia variedad de insectos y otros artrópodos, desde mariposas hasta escarabajos.</p>
            </article>
        </section>

        <!-- Sección de Acuario -->
        <section class="seccion-acuario" id="acuario">
            <section class="presentacion">
                <div class="it-txt">
                    <h1>Acuario del museo</h1>
                </div>
                <div class="it2-img">
                    <img src="https://www3.gobiernodecanarias.org/medusa/wiki/images/2/24/Pulpo.png" alt="pulpo">
                </div>
                <div class="banner"></div>
            </section>
            <img class="foto-museo" src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2020/03/animal-crossing-new-horizons-1905615.jpeg" alt="Acuario del museo">
            <article>
                <p>El Acuario del Museo alberga una colección de peces y otras criaturas marinas, ofreciendo a los visitantes una visión del mundo submarino.</p>
            </article>
        </section>
    </main>

    <!-- Footer -->
    <?php
      include '/home/davidmcerezo/public_html/pe2/view/footer.phtml';
    ?>
</body>
</html>