-- MySQL dump 10.19  Distrib 10.3.34-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: zeem_laravel
-- ------------------------------------------------------
-- Server version	10.3.34-MariaDB-0ubuntu0.20.04.1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'2022-08-07 04:32:06','2022-08-07 04:32:06','Thursday','الخميس'),(2,'2022-08-07 04:32:40','2022-08-07 04:32:40','Friday','الجمعة'),(3,'2022-08-07 04:33:03','2022-08-07 04:33:03','Saturday','السبت'),(4,'2022-08-07 04:33:37','2022-08-07 04:33:37','Sunday','الأحد');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chefs`
--

DROP TABLE IF EXISTS `chefs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chefs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chefs`
--

LOCK TABLES `chefs` WRITE;
/*!40000 ALTER TABLE `chefs` DISABLE KEYS */;
INSERT INTO `chefs` VALUES (2,'Hiram Kim','Similique aut blandi','/1658789269-3.jpg','Trevor Dominguez','Et ipsa ex dolor ip','https://www.facebook.com/','https://www.instagram.com/','https://twitter.com/','2022-07-25 22:47:49','2022-07-31 16:44:39'),(3,'Macon Wall','Deserunt culpa ad re','/1658797037-1.jpg','Brenden Moss','Amet voluptatem mo','https://www.facebook.com/','https://www.instagram.com/','https://twitter.com/','2022-07-26 00:57:17','2022-07-31 16:45:17');
/*!40000 ALTER TABLE `chefs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `day_wmeal`
--

DROP TABLE IF EXISTS `day_wmeal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `day_wmeal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wmeal_id` int(10) unsigned NOT NULL,
  `day_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `day_wmeal`
--

LOCK TABLES `day_wmeal` WRITE;
/*!40000 ALTER TABLE `day_wmeal` DISABLE KEYS */;
INSERT INTO `day_wmeal` VALUES (1,NULL,NULL,1,4),(2,NULL,NULL,1,6),(3,NULL,NULL,1,7),(4,NULL,NULL,2,2),(5,NULL,NULL,2,3),(6,NULL,NULL,2,5);
/*!40000 ALTER TABLE `day_wmeal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `days`
--

DROP TABLE IF EXISTS `days`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `days` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `days`
--

LOCK TABLES `days` WRITE;
/*!40000 ALTER TABLE `days` DISABLE KEYS */;
INSERT INTO `days` VALUES (1,NULL,NULL,'Saturday'),(2,NULL,NULL,'Sunday'),(3,NULL,NULL,'Monday'),(4,NULL,NULL,'Tuesday'),(5,NULL,NULL,'Wednesday'),(6,NULL,NULL,'Thursday'),(7,NULL,NULL,'Friday');
/*!40000 ALTER TABLE `days` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meal_id` int(10) unsigned DEFAULT NULL,
  `wmeal_id` int(10) unsigned DEFAULT NULL,
  `setting_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_meal_id_foreign` (`meal_id`),
  CONSTRAINT `images_meal_id_foreign` FOREIGN KEY (`meal_id`) REFERENCES `meals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (10,'images/3IrNO00YbpcCsx4rhDuQWFgCTMNqGK8IfsgHqcjj.png',NULL,2,NULL,'2022-09-03 17:44:01','2022-09-03 17:44:01'),(12,'2/1662633592-Biryani.PNG',2,NULL,NULL,'2022-09-08 12:39:52','2022-09-08 12:39:52'),(13,'3/1662633754-WhatsApp Image 2022-07-14 at 11.09.01 PM.jpeg',3,NULL,NULL,'2022-09-08 12:42:34','2022-09-08 12:42:34'),(14,'4/1662634269-WhatsApp Image 2022-07-17 at 11.26.50 PM.jpeg',4,NULL,NULL,'2022-09-08 12:51:09','2022-09-08 12:51:09'),(15,'5/1662634416-Sweet Potato.jpg',5,NULL,NULL,'2022-09-08 12:53:36','2022-09-08 12:53:36'),(16,'6/1662638847-Picture1.jpg',6,NULL,NULL,'2022-09-08 14:07:27','2022-09-08 14:07:27'),(17,'7/1662638967-Zemman.PNG',7,NULL,NULL,'2022-09-08 14:09:27','2022-09-08 14:09:27'),(18,'8/1662641410-Sweet Potato.jpg',8,NULL,NULL,'2022-09-08 14:50:10','2022-09-08 14:50:10'),(19,'9/1662641512-hawawshi-ground-beef.jpg',9,NULL,NULL,'2022-09-08 14:51:52','2022-09-08 14:51:52'),(20,'10/1662641654-hawawshi-ground-beef.jpg',10,NULL,NULL,'2022-09-08 14:54:14','2022-09-08 14:54:14'),(21,'11/1662641832-hawawshi-ground-beef.jpg',11,NULL,NULL,'2022-09-08 14:57:12','2022-09-08 14:57:12'),(22,'12/1662642350-Sweet Potato.jpg',12,NULL,NULL,'2022-09-08 15:05:50','2022-09-08 15:05:50');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meals`
--

DROP TABLE IF EXISTS `meals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `meals_category_id_foreign` (`category_id`),
  CONSTRAINT `meals_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meals`
--

LOCK TABLES `meals` WRITE;
/*!40000 ALTER TABLE `meals` DISABLE KEYS */;
INSERT INTO `meals` VALUES (1,'Duncan Fry','Eaque esse repudiand',300.00,'/1659260173-2.jpg','Tuesday',NULL,17,'2022-07-31 09:36:13','2022-07-31 16:48:58','Gisela Sandoval','Iusto culpa laudant','2022-07-31 16:48:58'),(2,'Chicken Biryani','Basmati rice with chicken cubes marinated in authentic Indian Biryani masala served with yogurt salad - Meal for 2 persons',350.00,'2/1662633592-Biryani.PNG','Thursday',1,10,'2022-09-03 17:45:32','2022-09-08 12:39:52','برياني فراخ','أرز بسمتي بقطع الفراخ المخلية متبلة في خلطة البرياني الهندي الأصلية تقدم مع سلطة الزبادي - وجبة تكفي شخصين',NULL),(3,'Shrimp Biryani','Basmati rice with shrimps marinated in authentic Indian Biryani masala served with yogurt salad - Meal for 2 persons',400.00,'/1662633754-WhatsApp Image 2022-07-14 at 11.09.01 PM.jpeg','Thursday',1,10,'2022-09-08 12:42:34','2022-09-08 12:42:34','برياني جمبري','أرز بسمتي بالجمبري متبل في خلطة البرياني الهندي الأصلية تقدم مع سلطة الزبادي - وجبة تكفي شخصين',NULL),(4,'Veg Biryani','Basmati rice with vegetables marinated in authentic Indian Biryani masala served with yogurt salad - Meal for 2 persons',300.00,'/1662634269-WhatsApp Image 2022-07-17 at 11.26.50 PM.jpeg','Thursday',1,10,'2022-09-08 12:51:09','2022-09-08 12:51:09','برياني خضار','أرز بسمتي بالخضار متبل في خلطة البرياني الهندي الأصلية تقدم مع سلطة الزبادي - وجبة تكفي لشخصين',NULL),(5,'Zatata Sweet','Zeem\'s style sweet potato tajin.',100.00,'/1662634416-Sweet Potato.jpg','Thursday',1,10,'2022-09-08 12:53:36','2022-09-08 12:53:36','حلو زطاطا','طاجن بطاطا بجوز الهند على طريقة زيم.',NULL),(6,'Zeem Rice Tajin','Zeem\'s style Egyptian rice tajin with chicken cubes and milk served with yogurt salad - Meal for two persons.',350.00,'/1662638847-Picture1.jpg','Friday',2,10,'2022-09-08 14:07:27','2022-09-08 14:07:27','طاجن أرز زيم','طاجن أرز مصري بقطع الفراخ والحليب على طريقة زيم يقدم مع سلطة الزبادي - وجبة تكفي شخصين',NULL),(7,'Grilled Quails','One piece of grilled mega jumbo quail (300 gm) marinated in our special seasoning served with Tahini & Balady (local green) salad.',100.00,'/1662638967-Zemman.PNG','Friday',2,10,'2022-09-08 14:09:27','2022-09-08 14:09:27','سمان مشوي','فرد سمان مشوي حجم ميجا جامبو(300 جم) بتتبيلة زيم الخاصة  يقدم مع سلطة الطحينة والسلطة البلدي.',NULL),(8,'Zatata Sweet','Zeem\'s style sweet potato tajin.',100.00,'/1662641410-Sweet Potato.jpg','Friday',2,10,'2022-09-08 14:50:10','2022-09-08 14:50:10','حلو زطاطا','طاجن بطاطا بجوز الهند على طريقة زيم.',NULL),(9,'Beef Zawawshi','Balady bread stuffed with fresh minced beef seasoned with Zeem\'s special species.',60.00,'/1662641512-hawawshi-ground-beef.jpg','Saturday',3,20,'2022-09-08 14:51:52','2022-09-08 14:57:40','رغيف زاواوشي لحمة','رغيف عيش بلدى باللحمة المفرومة الطازجة المتبلة ببهارات زيم الخاصة',NULL),(10,'Chicken Zawawshi','Balady bread stuffed with fresh minced chicken seasoned with Zeem\'s special species.',50.00,'/1662641654-hawawshi-ground-beef.jpg','Saturday',3,20,'2022-09-08 14:54:14','2022-09-08 15:04:22','رغيف زاواوشي فراخ','رغيف عيش بلدى بالفراخ المفرومة الطازجة المتبلة ببهارات زيم الخاصة Price',NULL),(11,'Tuna Zawawshi','Balady bread stuffed with Tuna seasoned with Zeem\'s special species.',50.00,'/1662641832-hawawshi-ground-beef.jpg','Saturday',3,18,'2022-09-08 14:57:12','2022-09-09 11:36:08','رغيف زاواوشي تونة','رغيف عيش بلدى بالتونة المتبلة ببهارات زيم الخاصة',NULL),(12,'Zatata Sweet','Zeem\'s style sweet potato tajin.',100.00,'/1662642350-Sweet Potato.jpg','Saturday',3,10,'2022-09-08 15:05:50','2022-09-08 15:05:50','حلو زطاطا','طاجن بطاطا بجوز الهند على طريقة زيم.',NULL);
/*!40000 ALTER TABLE `meals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (15,'2014_10_12_000000_create_users_table',1),(16,'2014_10_12_100000_create_password_resets_table',1),(17,'2019_08_19_000000_create_failed_jobs_table',1),(18,'2022_02_10_203551_create_contacts_table',1),(19,'2022_05_15_234034_create_categories_table',1),(20,'2022_05_15_234034_create_images_table',1),(21,'2022_05_15_234034_create_meals_table',1),(22,'2022_05_15_234034_create_orders_table',1),(23,'2022_05_15_234034_create_settings_table',1),(24,'2022_05_15_234044_create_foreign_keys',1),(25,'2022_06_05_173007_create_day_wmeal_table',1),(26,'2022_06_05_173007_create_days_table',1),(27,'2022_06_05_173007_create_wmeals_table',1),(28,'2022_07_24_135404_create_chefs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_delivery_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('pending','accepted','rejected','completed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meal_id` int(10) unsigned DEFAULT NULL,
  `wmeal_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_meal_id_foreign` (`meal_id`),
  CONSTRAINT `orders_meal_id_foreign` FOREIGN KEY (`meal_id`) REFERENCES `meals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (26,'Hall Holmes','01017387318','Similique distinctio',903,NULL,'5:00 PM','rejected','Id rerum qui consequ',1,NULL,'2022-07-31 12:36:55','2022-07-31 16:37:40'),(27,'Brianna Head','01017387318','Distinctio Soluta c',23,NULL,'10:00 PM','rejected','Neque ut facilis nes',1,NULL,'2022-07-31 12:37:53','2022-07-31 16:37:38'),(28,'Benjamin Tyler','01017387318','Sed elit ducimus s',8,NULL,'5:00 PM','rejected','Voluptatum quis ut a',1,NULL,'2022-07-31 12:41:09','2022-07-31 16:37:37'),(29,'Jaden Marquez','01017387318','Sit nobis dolore re',49,NULL,'8:00 PM','rejected','Id et est aut itaqu',1,NULL,'2022-07-31 12:42:35','2022-07-31 16:37:36'),(30,'Yoko Norris','01017387318','Et veniam dolor dol',8,NULL,'9:00 PM','rejected','Quae quis ex ad a ut',1,NULL,'2022-07-31 12:45:13','2022-07-31 16:37:34'),(31,'Piper Perez','01017387318','Culpa anim dolorem e',9,NULL,'3:00 PM','rejected','Eius autem dolor et',1,NULL,'2022-07-31 12:51:47','2022-07-31 16:37:33'),(32,'George Golden','01017387318','Architecto soluta ni',86,NULL,'5:00 PM','rejected','Cupiditate quisquam',1,NULL,'2022-07-31 13:23:34','2022-07-31 16:37:30'),(33,'Edan England','01017387318','Quia atque neque deb',7,NULL,'2:00 PM','rejected','Perferendis nostrud',1,NULL,'2022-07-31 13:24:39','2022-07-31 16:37:28'),(34,'Hadassah Mclaughlin','01017387318','Aliquid irure sapien',1,NULL,'4:00 PM','accepted','Alias nemo est adip',1,NULL,'2022-07-31 13:26:11','2022-07-31 16:36:50'),(35,'Aphrodite Jenkins','01017387318','Eaque deserunt dolor',1,NULL,'6:00 PM','accepted','Voluptatibus consequ',1,NULL,'2022-07-31 13:29:11','2022-07-31 16:36:49'),(36,'Walker Callahan','01017387318','Veritatis sit laboru',3,NULL,'6:00 PM','accepted','Iusto officia minima',1,NULL,'2022-07-31 13:30:11','2022-07-31 16:36:47'),(37,'MacKenzie Holmes','01017387318','Inventore nihil opti',2,NULL,'4:00 PM','accepted','Ea perspiciatis fac',1,NULL,'2022-07-31 13:32:09','2022-07-31 16:36:45'),(38,'Florence Reynolds','01017387318','Nihil exercitation n',360,NULL,'3:00 PM','accepted','Impedit eligendi co',1,NULL,'2022-07-31 13:35:12','2022-07-31 16:36:44'),(39,'Stewart Pate','01017387318','Ex laborum molestiae',32,NULL,'10:00 PM','accepted','Optio quo eos rem m',1,NULL,'2022-07-31 13:36:59','2022-07-31 16:36:43'),(40,'Olivia Neal','01017387318','Aliqua Quos volupta',26,NULL,'2:00 PM','accepted','Eaque labore quo ali',1,NULL,'2022-07-31 14:54:33','2022-07-31 16:36:42'),(41,'Fuller Hancock','01017387318','Voluptatibus vel qua',60,NULL,'3:00 PM','accepted','Veniam similique se',1,NULL,'2022-07-31 14:55:38','2022-07-31 16:36:41'),(42,'Ethan Barber','01017387318','Quia qui culpa veli',173,NULL,'6:00 PM','accepted','Irure ut dolore alia',1,NULL,'2022-07-31 14:56:31','2022-07-31 16:36:39'),(43,'Calvin Roberson','01017387318','Sequi aut est ut bea',47,NULL,'7:00 PM','accepted','Sint rem cupidatat e',1,NULL,'2022-07-31 14:57:54','2022-07-31 16:36:38'),(44,'Lacey Wheeler','01017387318','Velit molestiae ut u',82,NULL,'5:00 PM','accepted','Aliqua Reprehenderi',1,NULL,'2022-07-31 14:59:27','2022-07-31 16:36:37'),(45,'Oscar Fuentes','01017387318','Excepteur aut conseq',183,NULL,'3:00 PM','accepted','Cupidatat quod odio',1,NULL,'2022-07-31 15:00:33','2022-07-31 16:36:36'),(46,'Wesley Zamora','01017387318','Rem odio ut eos inc',10,NULL,'10:00 PM','accepted','Enim error autem aut',1,NULL,'2022-07-31 15:05:35','2022-07-31 16:36:35'),(47,'Autumn Cross','01017387318','Cillum ducimus illu',10,NULL,'5:00 PM','accepted','Veritatis qui tempor',1,NULL,'2022-07-31 15:06:20','2022-07-31 16:36:33'),(48,'Illana Harris','01017387318','Ab aliquam explicabo',70,'Thursday','2:00 PM','accepted','Omnis aspernatur fug',NULL,1,'2022-07-31 16:05:19','2022-07-31 16:36:32'),(49,'Justin Burton','01017387318','Unde illum voluptat',20,'Thursday','7:00 PM','accepted','Tempora aut sed offi',NULL,1,'2022-07-31 16:06:10','2022-07-31 16:36:30'),(50,'Hazem Mahmoud','01001172577','https://maps.app.goo.gl/yJ6xYLwWzJj9h8UR8?g_st=iw',2,NULL,'3:00 PM','pending','No hot Spicies',11,NULL,'2022-09-09 11:36:08','2022-09-09 11:36:08');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fb_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline_en_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline_en_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline_en_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline_ar_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline_ar_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline_ar_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ar_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ar_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ar_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_text_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_text_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_hour` time DEFAULT NULL,
  `end_hour` time DEFAULT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,NULL,'2022-09-14 17:39:27','https://www.facebook.com/','https://www.instagram.com/','https://twitter.com/','01017389785','When Food brings good memories​','When Food brings good memories​','When Food brings good memories​','لما الأكل يفكرنا بالذكريات الجميلة​','لما الأكل يفكرنا بالذكريات الجميلة​','لما الأكل يفكرنا بالذكريات الجميلة​','Food taste and smell provoke lovely memories together with family and friends, especially when made  with individual home care that is rarely found in restaurants.​','Zeem will bring you those memories with premium quality and delicious taste that are seasoned with love, using gourmet healthy and fresh ingredients.​','As we believe in premium quality and strict hygiene standards, each dish is made by our chef. We hope you enjoy Zeem\'s meals, creating unforgettable memories.​','ريحة وطعم الأكل بيفكرنا بالذكريات الجميلة للمة العيلة و الأصحاب خاصة لما يكون بجمال ونظافة الأكل البيتي.​','زيم حيرجعلكم الذكريات دي بطعم الأكل الفريد و المطبوخ بحب بمكونات عالية الجودة وصحية وطازة.​','ولأننا بنحرص على معايير الجودة العالية والنظافة في نفس الوقت, الشيف بيعمل كل طبق بنفسه.​\r\nياريت تستمتعوا بوجباتنا وتكون جزء من ذكرياتكم الجميلة.​','1/1659349432-1659260187-4.jpg','Growing up, we often had guests. Like many Egyptian homes, my mother spent the whole day in the kitchen preparing a meal. She told me “Guests do not see you cooking but will taste how much care you put in your food”. She added, “good food provokes conversations at the dinning table and creates memorable moments”. As a child I enjoyed cooking with my mother. We were not just feeding guests but building memories. I think of her passion with every dish I prepare and after she passed away.\r\nI hope you enjoy your meal and build your own memories.','تحت الإنشاء','1/1659349461-1659260187-4.jpg','To ensure food premium quality and strict hygiene standards, each dish is made by our chef, therefore certain dishes are served on specific days of the week with limited number of orders.​ Order(s) can be only placed online at least one day ahead.​ Our menu is delivered from Thursday to Saturday from 2:00 to 10:00.','لضمان جودة الطعام ومعايير النظافة الصارمة ، يقوم طاهينا بإعداد كل طبق ، لذلك يتم تقديم أطباق معينة في أيام محددة من الأسبوع بعدد محدود من الطلبات. يمكن تقديم الطلب (الطلبات) عبر الإنترنت قبل يوم واحد على الأقل. يتم توصيل قائمتنا من الخميس إلى السبت من الساعة 2:00 حتى 10:00.','1/1662642185-Biryani.PNG','1/1662642185-Biryani.PNG','Thursday','Saturday','14:00:00','22:00:00','45873','1/1659349486-1659260173-2.jpg');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@admin.com',NULL,'$2y$10$GrdOymy.kZZQnoilbGDfDuDN93Jv3bn4Jooh89zAmOdSUQXQpwOVe',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wmeals`
--

DROP TABLE IF EXISTS `wmeals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wmeals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wmeals`
--

LOCK TABLES `wmeals` WRITE;
/*!40000 ALTER TABLE `wmeals` DISABLE KEYS */;
INSERT INTO `wmeals` VALUES (1,'2022-07-31 09:36:27','2022-07-31 16:49:02','Winifred Mathews','Leonard Cervantes','Do dolor velit harum','Qui vel eius quod no',298.00,'/1659260187-4.jpg',0,'2022-07-31 16:49:02'),(2,'2022-09-03 17:44:01','2022-09-08 12:40:05','test meale','test meale','test meale','test meale',100.00,'/1662219841-test.png',20,'2022-09-08 12:40:05');
/*!40000 ALTER TABLE `wmeals` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-21 15:56:11
