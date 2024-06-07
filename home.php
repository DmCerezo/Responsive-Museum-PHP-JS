<?php
/*******************************************
 *
 * Ingeniería Informática - PW - David Martín Cerezo - 2024
 *
 *******************************************
 *
 *  Archivo PHP para Comprobar inicio de sesión correcto importante para Testing
 *
 ******************************************************************************/
?>

<?php
session_start();
if(!isset($_SESSION["usuario"])) {
    header("location: inicio.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión Exitoso</title>
    <link rel="stylesheet" href="css/styles-alta.css">
</head>
<body>

<div class="form-register">
    <h4>Bienvenido, <?php echo $_SESSION["usuario"]; ?>.</h4>
    <p>¡Inicio de sesión exitoso!</p>
    <br><br>
    <div class="form-options">
        <a href="index.php" class="botons"><i class="fas fa-home " title="Volver a inicio"></i> Pagina principal</a>
        <a href="html/coleccion.php" class="botons"><i class="fas fa-archive " title="Volver a inicio"></i> Visita la Coleccion</a>
        <a href="html/experiencias.php" class="botons"><i class="fas fa-thumbs-up " title="Volver a inicio"></i> Deja una Opinión</a>
        <a href="cerrar_sesion.php" class="botons"><i class="fas fa-times" title="Cerrar sesión"></i> Cerrar Sesión</a>
    </div>
</div>

</body>
</html>
