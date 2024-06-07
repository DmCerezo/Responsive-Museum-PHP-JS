<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $autor = $_POST['autor'];
    $fecha = $_POST['fecha'];
    $descripcion = $_POST['descripcion'];
    $enlace_imagen = $_POST['enlace_imagen'];

    echo "ID: " . $id . "<br>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Tipo: " . $tipo . "<br>";
    echo "Autor: " . $autor . "<br>";
    echo "Fecha: " . $fecha . "<br>";
    echo "Descripción: " . $descripcion . "<br>";
    echo "Enlace Imagen: " . $enlace_imagen . "<br>";

    // Conectar a la base de datos
    $dsn = "mysql:host=localhost;dbname=dbdavidmcerezo_pw2324;charset=utf8";
    $usuario_db = "pwdavidmcerezo";
    $password_db = "23davidmcerezo24";

    try {
        // Crear una nueva instancia de PDO
        $conexion = new PDO($dsn, $usuario_db, $password_db);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Preparar la consulta SQL para actualizar la obra
        $query = $conexion->prepare('UPDATE coleccion SET nombre = ?, tipo = ?, autor = ?, fecha = ?, descripcion = ?, enlace_imagen = ? WHERE id = ?');
        $query->execute([$nombre, $tipo, $autor, $fecha, $descripcion, $enlace_imagen, $id]);

        // Redirigir de vuelta a la página de colección
        header("Location: https://bahia.ugr.es/~davidmcerezo/pe2/html/coleccion.php?info=4");
        exit();
    } catch (PDOException $e) {
        // Manejar cualquier error de la base de datos
        echo "Error de base de datos: " . $e->getMessage();
        header("Location: https://bahia.ugr.es/~davidmcerezo/pe2/html/coleccion.php?error=2");
        die();
    }
} else {
    // Si no se recibió una solicitud POST, redirigir con un mensaje de error
    header("Location: https://bahia.ugr.es/~davidmcerezo/pe2/html/coleccion.php?error=4");
    exit();
}
?>
