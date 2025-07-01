/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.7.2-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: avdril
-- ------------------------------------------------------
-- Server version	11.7.2-MariaDB-ubu2404

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cars` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `manufacturer` varchar(256) NOT NULL,
  `model` varchar(256) NOT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `condition` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `speed` varchar(256) NOT NULL,
  `mileage` varchar(256) NOT NULL,
  `battery` tinytext NOT NULL,
  `fuel` varchar(256) NOT NULL,
  `total_run` varchar(256) NOT NULL,
  `gear` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `car_type` varchar(256) NOT NULL,
  `stock` tinyint(4) NOT NULL DEFAULT 100,
  `for_sell` tinyint(1) NOT NULL DEFAULT 1,
  `for_hire` tinyint(1) NOT NULL DEFAULT 0,
  `hire_price` decimal(10,0) DEFAULT NULL,
  `hire_availability` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES
(25,'Mazda','370z',20001,'ince the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the ','01863987793','tarunno@gmail.com','250','55','OK','Patrol','20000','Auto','Carnissan_370z.jpg','Sports',0,1,0,NULL,1),
(26,'Macedes','A-class 2020',40500,'ince the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the ','01863987793','toma@gmail.com','170','60','OK','Octen  ','12000','Auto','CarAclass.jpg','Regular',0,1,0,NULL,1),
(27,'BMW','2-series 2018',23000,'ince the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the ','01863987793','molly@gmail.com','220','50','OK','Patrol','14500','Manual','Carbmw2series.jpg','Sports',0,1,0,NULL,1),
(28,'BMW','M2 sedan',20001,'ince the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the ','01863987793','dolly@gmail.com','250','54','OK','Patrol','12000','Auto','Carbmwsedan.jpg','Regular',0,1,0,NULL,1),
(29,'Chevrolet','Camaro 2019',32500,'ince the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the ','01863987793','molly@gmail.com','250','55','OK','Octen  ','12000','Manual','Carcamaro.jpg','Sports',0,1,0,NULL,1),
(30,'Macedes','G-class 2016',20001,'ince the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the ','01863987793','molly@gmail.com','170','50','OK','Octen  ','14500','Auto','CarGclass.jpg','Off road',0,1,0,NULL,1),
(31,'Nissan','GTR r35 2018',34500,'ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It wa','01863987793','dolly@gmail.com','220','50','Need change','Patrol','20300','Manual','Cargtr35.jpg','Sports',0,1,0,NULL,1),
(32,'General Motors','Hummer H3',15000,'ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It wa','01863987793','srity@gmail.com','123','40','OK','Dessel ','20000','Manual','Carh3.jpg','Off road',0,1,0,NULL,1),
(33,'Mazda','MX-5 Miara',20001,'ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It wa','01863987793','tarunno@gmail.com','170','55','Need change','Dessel ','14500','Manual','Carmiata.jpg','Sports',0,1,0,NULL,1),
(34,'Ford','Mustang Eco-boost 2016',23000,'ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It wa','01863987793','tarunno@gmail.com','220','50','OK','Dessel ','12000','Auto','Carmustang.jpg','Sports',0,1,0,NULL,1),
(35,'Toyota','Prias 2019',12000,'ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It wa','01863987793','dolly@gmail.com','140','60','OK','Patrol','14500','Auto','Carprias.jpeg','Regular',0,1,0,NULL,1),
(36,'Audi','R8 sports 2020',44000,'ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It wa','01863987793','tarunno@gmail.com','250','50','OK','Octen  ','20000','Auto','CarR8.jpg','Sports',0,1,0,NULL,1),
(38,'Ford','Runner Raptor 2016',20045,'ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It wa','01863987793','tarunno@gmail.com','170','55','OK','Dessel ','20000','Manual','Carraptor.jpg','Off road',0,1,0,NULL,1),
(39,'Toyota','Runner 2020',37000,'ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It wa','01863987793','tarunno@gmail.com','200','50','OK','Octen  ','20000','Manual','Carrunner.jpg','Off road',0,1,0,NULL,1),
(40,'Mazda','RX-7 2002',20001,'ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It wa','01863987793','tarunno@gmail.com','220','55','Need change','Dessel ','12000','Auto','Carrx7.jpg','Sports',0,1,0,NULL,1),
(41,'Toyota','Supra 2020',27500,'ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It wa','01863987793','tarunno@gmail.com','220','40','OK','Patrol','New','Auto','Carsupra.jpg','Sports',0,1,0,NULL,1),
(42,'Toyota','Camry TRD 2019 ',21600,'ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It wa','01863987793','molly@gmail.com','180','46','OK','Octen  ','20000','Manual','Cartoyota_camry.jpg','Regular',0,1,0,NULL,1),
(43,'Range rover','Valar V6 2017',45000,'ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It wa','01863987793','tarunno@gmail.com','200','50','OK','Dessel ','12000','Auto','Carvalar.jpg','Off road',0,1,0,NULL,1),
(44,'Volks Wagon','Beetle 2006',20001,'ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It wa','01863987793','tarunno@gmail.com','123','55','Need change','Octen  ','28000','Auto','Carvolkswagen_beetle.jpg','Regular',0,1,0,NULL,1),
(45,'Volks Wagon','Passat 2020',12400,'ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It wa','01863987793','dolly@gmail.com','130','56','OK','Patrol','New','Auto','Carvolkswagen_passat.jpg','Regular',0,1,0,NULL,1),
(46,'Jeep','Wrangler Rubicon 2017',37800,'ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It wa','01863987793','tarunno@gmail.com','170','50','OK','Dessel ','14500','Manual','Carwrangler.jpg','Off road',0,1,0,NULL,1),
(47,'General Motors','Ram V6 2017',20240,'500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with','01863987793','tarunno@gmail.com','140','55','OK','Octen  ','20000','Manual','Carram.jpg','Off road',0,1,0,NULL,1),
(48,'Lambougini','Huracan 2017',67000,'500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with','01863987793','toma@gmail.com','220','37','OK','Patrol','12000','Auto','Carhuracan.jpg','Sports',0,1,0,NULL,1),
(49,'Laxus','LC V4 turbo 2014',22500,'500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with','01863987793','molly@gmail.com','200','50','Need change','Octen  ','20000','Auto','CarLexus_LC.jpg','Sports',0,1,0,NULL,1),
(50,'Tesla','Model S 2015',20001,'Tarunno ince the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised','01863987793','toma@gmail.com','250','50','OK','Electric ','20000','Auto','CarteslaModelS.jpg','Regular',0,1,0,NULL,1),
(53,'HOWO','Sino truck',2000,'New','','','100','35355','Good','Diesel','2000','Manual','CarHowo-340-6X4-2.jpg','TRUCK',100,1,0,1000,1);
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cart` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(256) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `product_price` bigint(20) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `product_model` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `product_image` varchar(256) NOT NULL,
  `is_sparepart` tinyint(1) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `cart_ibfk_1` (`user_id`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallary`
--

DROP TABLE IF EXISTS `gallary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallary` (
  `image1` varchar(256) NOT NULL,
  `image2` varchar(256) NOT NULL,
  `image3` varchar(256) NOT NULL,
  `image4` varchar(256) NOT NULL,
  `image5` varchar(256) NOT NULL,
  `image6` varchar(256) NOT NULL,
  `image7` varchar(256) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallary`
--

LOCK TABLES `gallary` WRITE;
/*!40000 ALTER TABLE `gallary` DISABLE KEYS */;
INSERT INTO `gallary` VALUES
('Gallaryb6252dbd054d2f02b45a857741e58cf7.jpg','GallaryBronco-Two-Door.jpg','gallary1.jpeg','GallaryThoughtxc7ygvpaltbng0ix3bxp.jpg','GallaryThoughtrocket-bunny-gtr-1.jpg','gallary9.jpg','gallary10.jpg',1);
/*!40000 ALTER TABLE `gallary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marketers`
--

DROP TABLE IF EXISTS `marketers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `marketers` (
  `id` varchar(20) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `showing` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marketers`
--

LOCK TABLES `marketers` WRITE;
/*!40000 ALTER TABLE `marketers` DISABLE KEYS */;
INSERT INTO `marketers` VALUES
('684997402df22','Emma Steryo','emmassteryo@gmail.com',1);
/*!40000 ALTER TABLE `marketers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_thoughts`
--

DROP TABLE IF EXISTS `my_thoughts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `my_thoughts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `create_time` datetime NOT NULL DEFAULT current_timestamp(),
  `tag` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_thoughts`
--

LOCK TABLES `my_thoughts` WRITE;
/*!40000 ALTER TABLE `my_thoughts` DISABLE KEYS */;
INSERT INTO `my_thoughts` VALUES
(4,'PRF & F Toyota Supra mk4','ype and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Le \r\n<br><br>\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\r\n','Thoughtb6252dbd054d2f02b45a857741e58cf7.jpg','2020-07-30 12:27:25','Supra'),
(5,'Why everyone love HONDA s2000',' Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetti\r\n<br><br>\r\nt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n<br> <br>\r\npackages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web','ThoughtaXvQZwP_460s.jpg','2020-07-30 12:31:31','S2000'),
(6,'Land Rover Defender V8 (2018) Features, Design, Driving','industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n<br> <br>\r\nindustry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','Thoughtmaxresdefault.jpg','2020-07-30 19:50:54','Defender'),
(7,'The New 2021 Ford Bronco Isn\'t Just an SUV, It\'s a Lifestyle','t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n<br> <br>\r\ndable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page','ThoughtBronco-Two-Door.jpg','2020-07-30 19:55:25','Bronco'),
(8,'GM is Reviving \"Hummer\" as New Electric Pickup','It is a long established fact that a reader will be distracted by the readable cont\r\n<br> <br>\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n<br> <br>\r\nking it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model ','Thoughtxc7ygvpaltbng0ix3bxp.jpg','2020-07-30 19:57:59','Hummer'),
(9,'Wide Body Rocket Bunny Nissan GT-R 35 V2','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n<br> <br>\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites simes on purpose (injected humour and the like).','Thoughtrocket-bunny-gtr-1.jpg','2020-07-30 20:07:25','Rocket bunny'),
(10,' 2018 Dodge Demon vs Hellcat Challenger - Major Differences','Content of a page when looking at its layout. The point of using Lorem Ipsum I.\r\n<br><br>\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n<br><br>\r\nmany web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n','ThoughtDodge-Demon-vs-Hellcat-Challenger.jpg','2020-07-30 20:09:55','Dodge'),
(11,'Car Comparison Tests - How To Compare Cars','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n<br><br>\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose','Thoughtdw-burnett-supras-finals-6-1595000408.jpg','2020-07-30 20:12:09','Comparison');
/*!40000 ALTER TABLE `my_thoughts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` bigint(20) NOT NULL DEFAULT -1,
  `is_sparepart` tinyint(1) NOT NULL DEFAULT 0,
  `quantity` int(10) unsigned NOT NULL,
  `is_hire` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `order_items_ibfk_2` (`order_id`),
  KEY `order_items_ibfk_3` (`product_id`),
  KEY `product_id2` (`is_sparepart`),
  CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` VALUES
(1,1,26,0,1,0),
(2,1,10,1,1,0);
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `address` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `postal_code` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `orders_ibfk_1` (`user_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES
(1,4,'71, Preah Monivong Blvd., Sangkat Srah Chork, Penh, Phnom','Newark','3698753910','78654','2025-07-01 12:11:32');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer` varchar(256) NOT NULL,
  `model` varchar(256) NOT NULL,
  `price` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `condition` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES
(3,'Toyota','Turbo Charger','100.5','Turbo','ProductTarboCharger2.jpg',' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o','dolly@gmail.com','01863987793'),
(4,'General Motors','Spare parts','123','Parts','ProductspareParts\'.jpg',' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o','mahadi@gmail.com','01863987793'),
(6,'GDMs','Hilux Crank shaft','300','Crank Shaft','ProductHilux_crankshaft.jpg',' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o','molly@gmail.com','01863987793'),
(9,'Nissan','Turbo Charger','45.8','Turbo','ProductTurboCharger.jpg',' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o','molly@gmail.com','01863987793'),
(10,'General Motors','Still Bushes','256','Bushes','ProductstillBushes.jpg',' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o','toma@gmail.com','01863987793'),
(11,'GDMs','Cumming Engine Parts','1000','Parts','ProductcummingEngineParts.jpg',' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o','dolly@gmail.com','01863987793'),
(12,'Toyota','Crank shaft','100.5','Crank Shaft','Productcrankshaft.jpg',' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o','molly@gmail.com','01863987793'),
(13,'General Motors','OME','45.8','OME','ProductOME.jpg',' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o','toma@gmail.com','01863987793'),
(14,'Rubicon Motors','Water pump','2000.5','Pump','ProductwaterPump.jpg',' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o','tarunno@gmail.com','01863987793'),
(15,'General Motors','Tharmo State','100.5','Tharmo State','ProductTharmoState.jpg',' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not o','molly@gmail.com','01863987793');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `marketer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_marketers_FK` (`marketer`),
  CONSTRAINT `users_marketers_FK` FOREIGN KEY (`marketer`) REFERENCES `marketers` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(4,'Tarunno','tarunno@gmail.com','$2y$10$iY7pemOsUh6H0Mcw8ynxY.EtxaO/d0zh49Pj3SiuycRwaJMn5xRcO',1,NULL),
(5,'Molly','molly@gmail.com','$2y$10$mL/wW1MRtcB7XPkuHo1JZu/tBP/SkzuHDxAYswg9flgMviEU/fBhu',0,NULL),
(8,'Dolly','dolly@gmail.com','$2y$10$lzFbsUpQjlJmaboCTnFyDeMZCV9tU0zY8o4sg3CPRJNW3b24peSxq',0,NULL),
(9,'dihebanyh','dihebanyh@tafmail.com','$2y$10$3C1TH7UjhRjoCpsnNc9XK.ila9v0n03jN2AvMqNDrlKnZ7Lu/mk8m',0,'684997402df22');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2025-07-01 15:58:45
