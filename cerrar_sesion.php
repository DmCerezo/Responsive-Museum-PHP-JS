<?php
/*******************************************
 *
 * Ingeniería Informática - PW - David Martín Cerezo - 2024
 *
 *******************************************
 *
 *  Archivo PHP para cerrar una sesion ya iniciada
 *
 ******************************************************************************/
?>

<?php
session_start();
session_unset();
session_destroy();
header('Location: index.php');
exit;
?>
