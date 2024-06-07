<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencias en el museo</title>
    <link rel="stylesheet" href="../css/comun/styles-cabecera-footer.css">
    <link rel="stylesheet" href="../css/comun/styles-banner.css">
    <link rel="stylesheet" href="../css/styles-experiencias.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
</head>
<body>
    <!-- HEADER -->
    <?php
      include '/home/davidmcerezo/public_html/pe2/config.php';
      include '/home/davidmcerezo/public_html/pe2/view/cabecera.phtml';
    ?>

<?php
// Conectar a la base de datos
$dsn = "mysql:host=localhost;dbname=dbdavidmcerezo_pw2324";
$usuario_db = "pwdavidmcerezo";
$password_db = "23davidmcerezo24";

try {
    // Crear una nueva instancia de PDO
    $conexion = new PDO($dsn, $usuario_db, $password_db);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Preparar la consulta SQL para obtener las reseñas
    $query = $conexion->query('SELECT * FROM resenias');
    $resenias = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}
?>
    <!-- Pagina principal -->
    <main>
        <section class="presentacion">
                <div class="it-txt">
                    <h1>Experiencias de visitantes</h1>
                </div>
                <div class="it2-img">
                    <img  src="../img/emoji.png" alt="emoji">
                </div>
                <div class="banner"></div>
        </section>

        <section class="parent">
                <!-- Sección de reseñas -->
                <?php foreach ($resenias as $resenia): ?>
                <section class="section0">
                        <img src="https://www.shutterstock.com/image-vector/blank-avatar-photo-place-holder-600nw-1095249842.jpg" alt="imagen">
                        <article>
                            <article class="nota">
                                <h2 class="title"><?= $resenia['usuario'] ?></h2>
                                <!-- Añade las imágenes de las monedas según la puntuación -->
                                <?php for ($i = 0; $i < $resenia['puntuacion']; $i++): ?>
                                    <img class="moneda" src="https://static.wikia.nocookie.net/animalcrossing/images/7/76/NH-Inventory_Icon-Coin.png" alt="moneda">
                                <?php endfor; ?>
                                <!-- Añade imágenes de monedas grises para la puntuación restante -->
                                <?php for ($i = 0; $i < (5 - $resenia['puntuacion']); $i++): ?>
                                    <img class="moneda gris" src="https://static.wikia.nocookie.net/animalcrossing/images/7/76/NH-Inventory_Icon-Coin.png" alt="moneda">
                                <?php endfor; ?>
                            </article>
                            <p class="description"><b><?= $resenia['titulo'] ?></b><br><?= $resenia['contenido'] ?></p>
                        </article>
                </section>
                <?php endforeach; ?>
                
            <section class="reseña-form full-width">
                <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                    <p>Ya has enviado una reseña, muchas gracias.</p>
                <?php elseif (isset($_GET['gracias']) && $_GET['gracias'] == 2): ?>
                    <p>Gracias por tu aportación, será de gran ayuda.</p>
                <?php else: ?>
                    <form id="reseña-formulario" action="guardar_resena.php" method="POST">
                        <p>Cuentanos tu experiencia</p>
                        <?php if (isset($_SESSION['usuario'])): ?>
                            <div class="vota">
                                <label for="puntuacion" style="margin-right: 10px;">Puntuación:</label>
                                <select id="puntuacion" name="puntuacion">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1 :C</option>
                                </select>
                            </div>
                            <input type="hidden" id="nombre" name="nombre" value="<?= $_SESSION['usuario'] ?>">
                            <input type="text" id="titulo" name="titulo" placeholder="Título de tu reseña" required>
                            <textarea id="contenido" name="contenido" placeholder="Escribe tu reseña aquí" required></textarea>
                            <button type="submit">Enviar</button>
                        <?php else: ?>
                            <p class="info">Por favor, <a href="<?= BASE_URL ?>iniciar.php">inicia sesión</a> para dejar una opinión.</p>
                        <?php endif; ?>
                    </form>
                <?php endif; ?>
            </section>
        </section>
    </main>

    <!-- FOOTER -->
    <?php
      include '/home/davidmcerezo/public_html/pe2/view/footer.phtml';
    ?>
</body>
</html>