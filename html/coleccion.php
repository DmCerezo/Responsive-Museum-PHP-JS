<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coleccion del museo</title>
    <link rel="stylesheet" href="../css/comun/styles-cabecera-footer.css">
    <link rel="stylesheet" href="../css/comun/styles-banner.css">
    <link rel="stylesheet" href="../css/styles-coleccion.css">

    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
</head>
<body>
    
  <!-- HEADER -->
  <?php
      include '/home/davidmcerezo/public_html/pe2/config.php';
      include '/home/davidmcerezo/public_html/pe2/view/cabecera.phtml';
    ?>

    <!-- Main page -->

    <?php
        // Iniciar la sesión si aún no se ha iniciado
        if (!isset($_SESSION)) {
            session_start();
        }

        // Verificar el estado de la sesión y el tipo de usuario
        if (isset($_SESSION['usuario']) && ($_SESSION['usuario'] == 'admin' || $_SESSION['usuario'] == 'Admin')) {
            // Para admin
            include '/home/davidmcerezo/public_html/pe2/view/coleccion/coleccion_admin.phtml';
        } else {
            // Para no admin
            include '/home/davidmcerezo/public_html/pe2/view/coleccion/coleccion_publica.phtml';
        }
    ?>


    <!-- FOOTER -->
    <?php
      include '/home/davidmcerezo/public_html/pe2/view/footer.phtml';
    ?>    

</body>
</html>