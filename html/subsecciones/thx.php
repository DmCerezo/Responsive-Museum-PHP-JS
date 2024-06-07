<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Agradecimiento</title>
<link rel="stylesheet" href="../../css/styles-alta.css">
<link rel="icon" type="image/x-icon" href="../img/favicon.png">
</head>
<body>
  <section class="form-register">
    <h1>Muchas Gracias, <?php echo obtenerNombreUsuarioMasReciente(); ?>.</h1>
    <h4>Te invitamos a seguir descubriendo y aprendiendo sobre historia:</h4>
    <p><a href="https://bahia.ugr.es/~davidmcerezo/pe2/">Seguir explorando el Museo</a></p>
    <br>
    <h4>También explorar la colección de forma dinamica date_date_set
      
    :</h4>
    <p><a href="https://bahia.ugr.es/~davidmcerezo/pe2/html/coleccion.php">Inciar sesión y publicar obras de arte</a></p>
    
    <?php
    function obtenerNombreUsuarioMasReciente() {
        // Conexión a la base de datos
        $dsn = "mysql:host=localhost;dbname=dbdavidmcerezo_pw2324";
        $usuario = "pwdavidmcerezo";
        $password = "23davidmcerezo24";

        try {
            // Crear una nueva instancia de PDO
            $conexion = new PDO($dsn, $usuario, $password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Consulta SQL para obtener el nombre del usuario más reciente
            $consulta = "SELECT nombre FROM usuarios ORDER BY fecha_registro DESC LIMIT 1";
            $resultado = $conexion->query($consulta);

            // Obtener el nombre del usuario
            $fila = $resultado->fetch(PDO::FETCH_ASSOC);
            return $fila['nombre'];
        } catch(PDOException $e) {
            // Manejo de errores
            return "Error al obtener el nombre del usuario";
        }
    }
    ?>
    
  </section>
</body>
</html>
