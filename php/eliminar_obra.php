<?php
/*******************************************
 *
 * Ingeniería Informática - PW - David Martín Cerezo - 2024
 *
 *******************************************
 *
 *  Script para eliminar una obra de la colección
 *
 ******************************************************************************/

// Iniciar la sesión si aún no se ha iniciado
if (!isset($_SESSION)) {
    session_start();
}

// Verificar si el usuario es un administrador
if (!isset($_SESSION['usuario']) || ($_SESSION['usuario'] != 'admin' && $_SESSION['usuario'] != 'Admin')) {
    header("Location: ../html/coleccion_publica.php");
    exit();
}

// Verificar si se ha proporcionado un ID de obra
if (!isset($_POST['id'])) {
    header("Location: ../html/coleccion_admin.php?error=1");
    exit();
}

$id = $_POST['id'];

// Conectar a la base de datos
$dsn = "mysql:host=localhost;dbname=dbdavidmcerezo_pw2324;charset=utf8";
$usuario_db = "pwdavidmcerezo";
$password_db = "23davidmcerezo24";

try {
    // Crear una nueva instancia de PDO
    $conexion = new PDO($dsn, $usuario_db, $password_db);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Preparar la consulta SQL para eliminar la obra
    $query = $conexion->prepare('DELETE FROM coleccion WHERE id = :id');
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();

    // Redirigir a la página de administración con un mensaje de éxito
    header("Location: ../html/coleccion.php?info=2");
    exit();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    header("Location: ../html/coleccion.php?error=1");
    die();
}
?>
