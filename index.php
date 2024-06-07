<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museo Virtual Socrates</title>
    <link rel="stylesheet" href="css/comun/styles-cabecera-footer.css">
    <link rel="stylesheet" href="css/comun/styles-banner.css">
    <link rel="stylesheet" href="css/styles-inicio.css"> 
    <link rel="icon" type="image/x-icon" href="img/favicon.png">

</head>
<body>
  <!-- HEADER -->
    <?php
      include '/home/davidmcerezo/public_html/pe2/config.php';
      include '/home/davidmcerezo/public_html/pe2/view/cabecera.phtml';
    ?>


  <!-- PAGINA -->

        <!-- Presentacion museo Paralax -->
        <section class="cont1"> 
          <div class="div-socra-c1"><img src="img/Socrates.png" alt="Socrates guia del museo"></div>
              <div class="div-texto" >
                <h1 class="degradado">
                  ¡Bienvenido
                </h1>
                <h1 class="minus">
                  Al
                </h1>
                <h1 class="degradado">
                  Museo!
                </h1>
              </div>
      </section>

      <!-- Nombre museo -->
      <section class="Presenta-Museo">
          <div class="it-txt-p"><h1>  MUSEO SÓCRATES </h1></div>
          <div class="it2-img-p"><img  src="img/colums.png" alt="Columnas"></div>
          <div class="banner"></div>
      </section>

      <!-- Mas info museo Paralax -->
      <section class="cont2"> 
        
        <div class="div-socra"><img class="img_socrates" src="img/Socrates2abajo.png" alt="Socrates guia del museo"></div>
        <div class="div-bocadillo2" >
          <img src="img/prueba_bocadillo.png" alt="Bocadillo">
          <p class="line-2 anim-escrib1"><b>¡Hola! Me llamo Sócrates y soy el guía</b></p>
          <p class="line-2 anim-escrib2"><b>Este museo ofrece una gran variedad</b></p>
          <p class="line-2 anim-escrib3"><b>Pintura, escritura, paleontologia, etc</b></p>
          <p class="line-2 anim-escrib4"><b>!Espero que disfrute mucho su visita!</b></p>
        </div>
      </section> 

      <!-- Seccion de novedades de museo------- -->
      <section class="presentacion-fin-paralax">
        <div class="it-txt"><h1>  ¡Últimas Novedades! </h1></div>
        <div class="it2-img"><img  src="img/star-icon.png" alt="estrella"></div>
        <div class="banner"></div>
      </section>

    <!-- MAIN -->
    <main>
        <!-- Carrusel de novedades -->

        <section class="ContainerCenter">
          <!-- Radio Seleccionar -->
          <input type="radio" name="Carrusel" id="Slider1" checked>
          <input type="radio" name="Carrusel" id="Slider2">
          <input type="radio" name="Carrusel" id="Slider3">
          
          <section class="Carrusels">
            <!-- Imagen contenido -->
            <div class="Carrusel" style="background-image: url(img/cuadro-midjourny-carrusel.jpg);">
              <a href="html/exposiciones.html#Exposiciones-temporales">
                  <article class="txt-carrusel"> 
                      <h2 class="title">Artistas de siglo XXI</h2>
                      <p class="description">Te presentamos nuestras nueva coleccion de pintura generada por la Inteligencia Artifial. ¡El futuro es hoy!.<br> <b>Disponible hasta el 2/7/2024</b></p>
                  </article>
              </a>
            </div> 
            <div class="Carrusel" style="background-image: url(img/foto-bicho-carrusel.jpg);">
              <a href="html/exposiciones.html#Exposiciones-temporales">
                <article class="txt-carrusel">
                  <h2 class="title">Maestros del camuflaje</h2>
                  <p class="description">Descubre las fascinates insectos invisibles y todos sus perfectos camuflajes con el medio.<br> <b>Disponible hasta el 28/07/2024</b></p>
                </article>
              </a>
            </div>

            <div class="Carrusel" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/f/f3/Rembrandt_Christ_in_the_Storm_on_the_Lake_of_Galilee.jpg);">
              <a href="html/exposiciones.html#Exposiciones-temporales">
                <article class="txt-carrusel">
                  <h2 class="title">Arte a la fuga</h2>
                  <p class="description">Descubre la fascinante historia que se oculta detras del Robo de un cuadro.<br> <b>Disponible hasta el 29/06/2024</b></p>
                </article>
              </a>
            </div>
            
              <!-- Flechas a la izquierda por cada imagen -->
              <label for="Slider3" class="ArrowLeft Arrow1">❮</label>
              <label for="Slider1" class="ArrowLeft Arrow2">❮</label>
              <label for="Slider2" class="ArrowLeft Arrow3">❮</label>

              <!-- Flechas a la derecha por cada imagen -->
              <label for="Slider2" class="ArrowRight Arrow1">❯</label>
              <label for="Slider3" class="ArrowRight Arrow2">❯</label>
              <label for="Slider1" class="ArrowRight Arrow3">❯</label>
          </section>
          
          <!-- Selector circulos inferiores -->
          <section class="Selectors">
            <label for="Slider1" class="Selector"></label>
            <label for="Slider2" class="Selector"></label>
            <label for="Slider3" class="Selector"></label>
          </section>
        </section>

        <!-- Seccion de fija del museo -->
        <section id="Coleccion" class="presentacion">
            <div class="it-txt"><h1>  ¡Nuestro Museo! </h1></div>
            <div class="it2-img"><img  src="img/Museo-3D.png" alt="Museo3D"></div>
            <div class="banner"></div>
        </section>



        <!-- Css grid -->
        <section class="parent">
            <section class="section1">
                <a href="html/coleccion.html" target="main_iframe"><img src="img/pintura-conde-de-orgaz.jpg" alt="Pintura conde de orgaz" width="100" height="50"></a>
                <article>
                  <h2 class="title">Pintura historica</h2>
                  <p class="description">Explora nuestra colección de pinturas clásicas y sumérgete en la historia con esta icónica obra maestra que retrata el legendario entierro del Conde de Orgaz, una joya del arte renacentista.</p>
                </article> 
              </section>

            <section class="section2">
              <a href="html/coleccion.html" target="main_iframe"><img src="img/img-pez-jurel.jpg" alt="imagen jurel" width="300" height="200"></a>
              <article>  
                <h2 class="title">La diversidad del mar</h2>
                <p class="description">Descubre la fascinante vida marina a través de nuestra sección dedicada al océano, donde podrás explorar la biodiversidad submarina y conocer más sobre la extraordinaria especie del pez Jurel.</p>
              </article> 
            </section>

            <section class="section3"> 
              <a href="html/coleccion.html" target="main_iframe"><img src="img/img-bicho-libelula.jpg" alt="imagen libelula" width="300" height="200"></a>
              <article>  
                <h2 class="title">La belleza de la naturaleza</h2>
                <p class="description">Sumérgete en el mundo natural y contempla la gracia y elegancia de los insectos en nuestra colección de arte inspirada en la naturaleza, donde cada detalle te transportará a la majestuosidad del reino animal.</p>
              </article> 
            </section>

            <section class="section4">
              <a href="html/subsecciones/fosiles.html" target="main_iframe"><img src="https://fciencias.ugr.es/images/stories/imagenes/nocheInvestigadores/rodeadosFosiles.jpg" alt="imagen fosil" width="300" height="200"></a>
              <article>   
                <h2 class="title">El legado del pasado</h2>
                <p class="description">Explora el fascinante mundo de la paleontología y sumérgete en un viaje a través del tiempo para descubrir los misteriosos secretos que los fósiles guardan sobre la evolución y la historia de nuestro planeta.</p>
              </article> 
            </section>

            <section class="section5">
              <a href="html/coleccion.html" ><img src="img/img-escultura-efeso.jpg" alt="imagen fosil" width="300" height="200"></a>
              <article>               
                  <h2 class="title">Escultura clásica </h2>
                  <p class="description">Admira la obra maestra del Renacimiento italiano, el icónico David de Miguel Ángel, y sumérgete en el mundo de la escultura clásica en nuestra destacada sección dedicada a las esculturas que han marcado la historia del arte.</p>
              </article>
            </section>

            <section class="section6">
              <a href="html/coleccion.html" ><img src="img/img-arquitectura-efeso.jpg" alt="imagen fosil" width="300" height="200"></a>
              <article>    
                <h2 class="title">Arquitectura histórica</h2>
                <p class="description">Explora la grandeza de la arquitectura antigua con nuestra selección de monumentos emblemáticos, como el majestuoso Partenón, que te transportará a épocas pasadas y te maravillará con su belleza y esplendor.</p>
              </article>
            </section>

            <section class="section7">
              <a href="html/informacion.html"><img src="img/mapa.png" alt="imagen mapa" width="300" height="200"></a>
              <article>     
                <h2 class="title">Calendario e Información</h2>
                <p class="description">Una sección que explora el área donde se encuentra el museo, destacando eventos significativos, figuras importantes y la evolución del lugar a lo largo del tiempo.</p>
              </article>
            </section>

            <section class="section8">
              <a href="html/experiencias.html"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Granada-Palacio_Carlos_V-P1050006.jpg/800px-Granada-Palacio_Carlos_V-P1050006.jpg" alt="imagen fosil" width="300" height="200"></a>
              <article>    
                <h2 class="title">Experiencias de visita</h2>
                <p class="description">Esta sección podría proporcionar información sobre eventos culturales, festivales, ferias y actividades recreativas que tienen lugar en el área cercana al museo.</p>
              </article>
            </section>

        </section>
      </main>


  <!-- FOOTER -->
  <?php
      include '/home/davidmcerezo/public_html/pe2/view/footer.phtml';
    ?>


</body>
</html>
