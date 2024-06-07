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
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Validar entradas
    if (empty($usuario) || empty($password)) {
        header('Location: index.php?error=1'); // Redirigir con un mensaje de error
        exit;
    }

    // Consulta para obtener el hash de la contraseña del usuario
    $consulta = "SELECT contrasena FROM usuarios WHERE usuario = :usuario";
    $statement = $conexion->prepare($consulta);
    $statement->bindParam(':usuario', $usuario, PDO::PARAM_STR);
    $statement->execute();

    // Verificar si el usuario existe
    if ($statement->rowCount() > 0) {
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $hash_contrasena = $row['contrasena'];

        // Verificar la contraseña
        if (password_verify($password, $hash_contrasena)) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['start'] = time(); // Guardar el tiempo de inicio de sesión
            $_SESSION['expire'] = $_SESSION['start'] + (15 * 60); // Expirar después de 15 minutos
            header('Location: home.php'); // Redirigir a la página para informar al usuario del inicio exitoso
            exit;
        } else {
            // Si la contraseña es incorrecta, redirigir al formulario de inicio de sesión con un error
            header('Location: index.php?error=1');
            exit;
        }
    } else {
        // Si el usuario no existe, redirigir al formulario de inicio de sesión con un error
        header('Location: index.php?error=1');
        exit;
    }
} catch(PDOException $e) {
    // Manejo de errores
    echo "Error: " . $e->getMessage();
}
?>
