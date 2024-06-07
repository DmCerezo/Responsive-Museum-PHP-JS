-- MariaDB dump 10.19  Distrib 10.5.23-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: dbdavidmcerezo_pw2324
-- ------------------------------------------------------
-- Server version	10.5.23-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Libros`
--

DROP TABLE IF EXISTS `Libros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Libros` (
  `isbn` varchar(20) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `editorial` varchar(30) NOT NULL,
  `numPaginas` smallint(5) unsigned NOT NULL,
  `anio` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Libros`
--

LOCK TABLES `Libros` WRITE;
/*!40000 ALTER TABLE `Libros` DISABLE KEYS */;
/*!40000 ALTER TABLE `Libros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coleccion`
--

DROP TABLE IF EXISTS `coleccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coleccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `enlace_imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coleccion`
--

LOCK TABLES `coleccion` WRITE;
/*!40000 ALTER TABLE `coleccion` DISABLE KEYS */;
INSERT INTO `coleccion` VALUES (1,'Pintura','Saturno devorando a su hijo','Francisco de Goya','Siglo XIX','Representa al titán Crono, como es habitual indiferenciado de Chronos, o Saturno en la mitología romana, en el acto de devorar a uno de sus hijos. La figura era emblema alegórico del paso del tiempo, pues Crono se comía a los hijos recién nacidos de Rea, su mujer, por temor a ser destronado por uno de ellos.','https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Francisco_de_Goya%2C_Saturno_devorando_a_su_hijo_%281819-1823%29.jpg/1200px-Francisco_de_Goya%2C_Saturno_devorando_a_su_hijo_%281819-1823%29.jpg'),(2,'Pintura','Las Meninas','Diego Velázquez','Siglo XVII','Una de las pinturas más famosas del pintor español Diego Velázquez.','https://blog.artsper.com/wp-content/uploads/2022/01/Blog-Headline-Image-5.jpg'),(3,'Pintura','La Escuela de Atenas','Rafael','Siglo XVI','Famosa pintura del Renacimiento italiano que representa a filósofos griegos y romanos.','https://hips.hearstapps.com/hmg-prod/images/elle-escuela-de-atenas-1-1586849897.jpg'),(4,'Pintura','Guernica','Pablo Picasso','Siglo XX','Pintura emblemática que representa el bombardeo de la ciudad de Guernica durante la Guerra Civil Española.','https://hips.hearstapps.com/hmg-prod/images/elle-guernica-03-1561359289.jpg'),(5,'Pintura','El Entierro del Conde de Orgaz','El Greco','Siglo XVI','Obra maestra del pintor español El Greco que representa un milagro ocurrido en la ciudad de Toledo.','https://rezarconlosiconos.com/granada/images/63.1-Entierro%20del%20Conde%20de%20Orgaz_detalle,%20El%20Greco.bmp'),(6,'Paleontología','Trilobites','Investigador','Prehistoria','Extintos artrópodos marinos que vivieron desde el Cámbrico hasta el Permiano.','https://upload.wikimedia.org/wikipedia/commons/a/a7/Phacops_rana_crassituberulata_dorsal.jpg'),(7,'Paleontología','Amonites','Investigador','Prehistoria','Cefalópodos marinos que vivieron desde el Devónico hasta el Cretácico.','https://static.nationalgeographicla.com/files/styles/image_3200/public/ammonite2309498.jpg'),(8,'Acuario','Jurel','Investigador','Actualidad','Pez marino común en pesca y acuicultura.','https://aderezo.mx/wp-content/uploads/2024/02/Jurel.jpg'),(9,'Acuario','Anguila de Listón','Investigador','Actualidad','Especie de anguila adaptada a aguas dulces.','https://upload.wikimedia.org/wikipedia/commons/0/0d/Anguila_list%C3%B3n_azul_%28Rhinomuraena_quaesita%29%2C_Anilao%2C_Filipinas%2C_2023-08-23%2C_DD_59.jpg'),(10,'Bicho','Viuda Negra','Investigador','Actualidad','Araña venenosa con marca característica en forma de reloj de arena en su abdomen.','https://www.mundodeportivo.com/urbantecno/hero/2023/03/viuda-negra.1679327498.9863.jpg?width=1200'),(11,'Bicho','Escarabajo','Investigador','Actualidad','Insecto con élitros que cubren sus alas membranosas.','https://okdiario.com/img/2021/07/10/datos-curiosos-del-escarabajo-rinoceronte1.jpg'),(17,'Pintura','Vista de Toledo','El Greco','Siglo XVI','A la izquierda se ve el castillo de San Servando y debajo de él una estructura inacabada, con minúsculas figuras humanas, que tal vez sea un convento con iglesia y claustro.','https://upload.wikimedia.org/wikipedia/commons/0/02/El_Greco_View_of_Toledo.jpg'),(18,'Pintura','Laocoonte','El Greco','Siglo XVII','Este lienzo representa un tema de la mitología griega, que relata el castigo sufrido por el sacerdote y adivino Laocoonte','https://historia-arte.com/_/eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpbSI6WyJcL2FydHdvcmtcL2ltYWdlRmlsZVwvNjA4ZDFjNjc1NzE1YS5qcGciLCJyZXNpemUsMjAwMCwyMDAwIl19.yT5cixRetTedZEB9gCjZFCjgbwGQRwV1rqkpypP5kyc.jpg'),(20,'Paleontología','Tyrannosaurus rex','Investigador','Prehistoria','Tyrannosaurus rex tenía el plan corporal básico de los miembros de su familia: cabeza grande, cuello corto en forma de S','https://images.newscientist.com/wp-content/uploads/2022/02/14152327/PRI_223536052.jpg'),(22,'Pintura','La noche estrellada','Vincent van Gogh','Siglo XIX','Lo que pinto van Gogh antes de volverse loco.','https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg/1200px-Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg');
/*!40000 ALTER TABLE `coleccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `frutas`
--

DROP TABLE IF EXISTS `frutas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `frutas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `color` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `calorias` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `frutas`
--

LOCK TABLES `frutas` WRITE;
/*!40000 ALTER TABLE `frutas` DISABLE KEYS */;
INSERT INTO `frutas` VALUES (1,'Manzana','Rojo','Fruta',52),(2,'Manzana','Rojo','Fruta',52),(3,'Manzana','Rojo','Fruta',52),(4,'manzana','verde','golden',15);
/*!40000 ALTER TABLE `frutas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resenias`
--

DROP TABLE IF EXISTS `resenias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resenias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resenias`
--

LOCK TABLES `resenias` WRITE;
/*!40000 ALTER TABLE `resenias` DISABLE KEYS */;
INSERT INTO `resenias` VALUES (1,'Admin','Muy buen museo','Me gusto mucho gracias adios',5,'2024-06-04 13:10:51'),(2,'dmartinc','Una maravilla','Me gusto mucho la seccion de obras robadas Â¡Es muy interesante! Pero no estoy muy contento porque el museo no tiene cafeteria ðŸ˜¤.',3,'2024-06-04 13:39:57'),(3,'pepelv','Una experiencia especial','Una maravilla de museo me gusto muchisimo pero le quito un punto porque habia alguien defecando en los baÃ±os',4,'2024-06-04 15:12:02'),(4,'JuananCruz','Cuadros IncreÃ­bles','El cuadro \"Saturno devorando a su hijo\" es una obra de arte. Me representa',5,'2024-06-04 15:13:55'),(5,'zairalr','La mejor experiencia de mi vida','Se me erizÃ³ la piel nada mÃ¡s entrar... El museo olÃ­a a one million, las obras eran exquisitas, me transportaban a un viaje astral, experiencia inolvidable, me quedarÃ­a a vivir allÃ­.',5,'2024-06-05 20:30:58');
/*!40000 ALTER TABLE `resenias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (12,'Jose','Juan','JoseJuan','josej@gmail.com','$2y$10$7LuARM.QQyHH5M97syZqa.Mu1.jb6C0ks0s5mQvT.E23d3OasSCg6','2024-06-05 11:36:23'),(16,'admin','admin','admin','admin@correo.ugr.es','$2y$10$vytlNFDzkvwyxOJHofmqiuHFnqNxxcuEz.iPpLfD5PNV/hEsA8jj6','2024-06-05 12:50:52'),(17,'David','Martin Cerezo','dmartinc','davidmcerezo@correo.ugr.es','$2y$10$1P4L5zUVSJz6qqtuV9DC3Ob6hQJRa/GI1dD2gKLb50IY.mTe3HR9C','2024-06-05 12:52:33'),(18,'Zaira','Lopez','zairalr','Zairalr01@gmail.com','$2y$10$LyASKjotZBb.Yphgg3Sz/OUAfTLvi72mcYGqdGFnVIAfl0/YnaNmi','2024-06-05 20:27:44');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-07 15:51:03
