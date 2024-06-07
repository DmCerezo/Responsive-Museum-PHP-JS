<?php
/*******************************************
 *
 * Ingeniería Informática - PW - David Martín Cerezo - 2024
 *
 *******************************************
 *
 *  Script para procesar la adición de una nueva obra a la colección
 *
 ******************************************************************************/
?>

<?php
$dsn = "mysql:host=localhost;dbname=dbdavidmcerezo_pw2324;charset=utf8";
$usuario_db = "pwdavidmcerezo";
$password_db = "23davidmcerezo24";

try {
    $conexion = new PDO($dsn, $usuario_db, $password_db);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];
        $autor = $_POST['autor'];
        $fecha = $_POST['fecha'];
        $descripcion = $_POST['descripcion'];
        $enlace_imagen = $_POST['enlace_imagen'];

        $sql = "INSERT INTO coleccion (nombre, tipo, autor, fecha, descripcion, enlace_imagen) VALUES (:nombre, :tipo, :autor, :fecha, :descripcion, :enlace_imagen)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':tipo', $tipo);
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':fecha', $fecha);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':enlace_imagen', $enlace_imagen);

        $stmt->execute();
        header('Location: https://bahia.ugr.es/~davidmcerezo/pe2/html/coleccion.php?info=3');
        exit();
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}
?>
