
<?php
// Iniciar la sesión
session_start();

//Archivo de configuración
require_once('../config.php');

// Comprobar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    // Si el usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
    header('Location: ' . BASE_URL . 'iniciar.php');
    exit();
}

// Conectar a la base de datos
$dsn = "mysql:host=localhost;dbname=dbdavidmcerezo_pw2324";
$usuario_db = "pwdavidmcerezo";
$password_db = "23davidmcerezo24";

try {
    // Crear una nueva instancia de PDO
    $conexion = new PDO($dsn, $usuario_db, $password_db);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar si el usuario ya ha enviado una reseña
    $query = $conexion->prepare('SELECT COUNT(*) FROM resenias WHERE usuario = ?');
    $query->execute([$_SESSION['usuario']]);
    $resena_enviada = $query->fetchColumn() > 0;

    if ($resena_enviada) {
        // Redirigir a la página del formulario con el parámetro de error
        header('Location: ' . BASE_URL . 'html/experiencias.php?error=1');
        exit();
    }

    // Preparar la consulta SQL para insertar una nueva reseña
    $query = $conexion->prepare('INSERT INTO resenias (usuario, titulo, contenido, puntuacion) VALUES (?, ?, ?, ?)');
    $query->execute([
        $_SESSION['usuario'], // El nombre del usuario
        $_POST['titulo'],     // El título de la reseña
        $_POST['contenido'],     // El contenido de la reseña
        $_POST['puntuacion']    // La puntuación
    ]);

    // Redirigir al usuario a una página de agradecimiento o de confirmación
    header('Location: ' . BASE_URL . 'html/experiencias.php?gracias=2');
    exit();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}
?>
