<?php
// Conexión a la base de datos
$dsn = "mysql:host=localhost;dbname=dbdavidmcerezo_pw2324";
$usuario_db = "pwdavidmcerezo";
$password_db = "23davidmcerezo24";

try {
    // Crear una nueva instancia de PDO
    $conexion = new PDO($dsn, $usuario_db, $password_db);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Validar entradas
    if (empty($nombre) || empty($apellidos) || empty($usuario) || empty($correo) || empty($contrasena)) {
        header('Location: index.php?error=1'); 
        exit;
    }

    // Hashear la contraseña
    $contrasena_hashed = password_hash($contrasena, PASSWORD_DEFAULT);

    // Insertar datos en la base de datos
    $consulta = "INSERT INTO usuarios (nombre, apellidos, usuario, correo, contrasena) VALUES (:nombre, :apellidos, :usuario, :correo, :contrasena)";
    $statement = $conexion->prepare($consulta);
    $statement->execute(array(
        ':nombre' => $nombre,
        ':apellidos' => $apellidos,
        ':usuario' => $usuario,
        ':correo' => $correo,
        ':contrasena' => $contrasena_hashed
    ));

    // Redireccionar al usuario a la página de agradecimiento
    header('Location: subsecciones/thx.php');
    exit;
} catch(PDOException $e) {
    // Manejo de errores
    echo "Error: " . $e->getMessage();
}
?>
