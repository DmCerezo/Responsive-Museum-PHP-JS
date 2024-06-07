<?php
/*******************************************
 *
 * Ingeniería Informática - PW - David Martín Cerezo - 2024
 *
 *******************************************
 *
 *  Detalles de la obra seleccionada
 *
 ******************************************************************************/

// Conectar a la base de datos
$dsn = "mysql:host=localhost;dbname=dbdavidmcerezo_pw2324;charset=utf8";
$usuario_db = "pwdavidmcerezo";
$password_db = "23davidmcerezo24";

try {
    $conexion = new PDO($dsn, $usuario_db, $password_db);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtener obra por ID
    if (isset($_GET['id'])) {
        $query = $conexion->prepare("SELECT * FROM coleccion WHERE id = :id");
        $query->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
        $query->execute();
        $obra = $query->fetch(PDO::FETCH_ASSOC);

        if (!$obra) {
            echo "Obra no encontrada";
            die();
        }

        // Obtener obras relacionadas por tipo
        $queryRel = $conexion->prepare("SELECT * FROM coleccion WHERE tipo = :tipo AND id != :id LIMIT 2");
        $queryRel->bindParam(':tipo', $obra['tipo'], PDO::PARAM_STR);
        $queryRel->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
        $queryRel->execute();
        $obrasRelacionadas = $queryRel->fetchAll(PDO::FETCH_ASSOC);

    } else {
        echo "ID de obra no especificado";
        die();
    }
} catch (PDOException $e) {
    echo "Error de base de datos: " . $e->getMessage();
    die();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obra <?php echo htmlspecialchars($obra['nombre']); ?></title>
    <link rel="stylesheet" href="../../css/comun/styles-cabecera-footer.css">
    <link rel="stylesheet" href="../../css/comun/styles-banner.css">
    <link rel="stylesheet" href="../../css/styles-cuadro.css">
    <link rel="icon" type="image/x-icon" href="../../img/favicon.png">
    <base target="_parent">     <!--Para que actualice la pagina padre y no el iframe -->
</head>
<body>
    <!-- HEADER -->
    <?php
      include '/home/davidmcerezo/public_html/pe2/config.php';
      include '/home/davidmcerezo/public_html/pe2/view/cabecera.phtml';
    ?>

    <!-- CONTENIDO -->
    <section class="container">
        <section class="image-container">
            <img src="<?php echo htmlspecialchars($obra['enlace_imagen']); ?>" alt="<?php echo htmlspecialchars($obra['nombre']); ?>">
        </section>
        <section class="bottom">
            <article class="description">
                <h2><?php echo htmlspecialchars($obra['nombre']); ?></h2>

                <p><br>
                <b>Autor: </b><?php echo htmlspecialchars($obra['autor']); ?><br>
                <b>Fecha: </b><?php echo htmlspecialchars($obra['fecha']); ?><br>
                <p>
                <b>Descripción:</b>
                <?php echo nl2br(htmlspecialchars($obra['descripcion'])); ?>
                </p><br>
                </p><br>
                <p>
                    <b>Más información:</b>
                    <a href="https://es.wikipedia.org/wiki/Special:Search?search=<?php echo urlencode($obra['nombre']); ?>" target="_blank">
                        Buscar "<?php echo htmlspecialchars($obra['nombre']); ?>" en Wikipedia
                    </a>
                </p>
            </article>
            <article class="iframe-recomd">
                <h2>Obras relacionadas</h2>
                <!-- Mostrar obras relacionadas aquí -->
                <section class="body-coleccion">
                    <?php foreach ($obrasRelacionadas as $index => $obraRelacionada): ?>
                        <section class="section<?php echo $index; ?>">
                            <a href="obra_detalle.php?id=<?php echo urlencode($obraRelacionada['id']); ?>">
                                <img src="<?php echo htmlspecialchars($obraRelacionada['enlace_imagen']); ?>" alt="<?php echo htmlspecialchars($obraRelacionada['nombre']); ?>">
                            </a>
                            <article>
                                <h2 class="title"><?php echo htmlspecialchars($obraRelacionada['nombre']); ?></h2><br>
                                <p class="description-recom"><?php echo htmlspecialchars($obraRelacionada['autor']); ?></p>
                                <p class="description-recom"><?php echo htmlspecialchars($obraRelacionada['fecha']); ?></p>
                            </article>
                        </section>
                    <?php endforeach; ?>
                </section>
            </article>
        </section>
    </section>

    <!-- FOOTER -->
    <?php
      include '/home/davidmcerezo/public_html/pe2/view/footer.phtml';
    ?>
</body>
</html>
