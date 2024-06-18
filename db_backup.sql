-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: localhost    Database: zeem_laravel
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'2022-08-07 04:32:06','2022-11-16 13:13:13','Biryani Thursday','خميس البرياني'),(2,'2022-08-07 04:32:40','2022-11-16 13:14:10','Grandma Friday','جمعة جدتي'),(3,'2022-08-07 04:33:03','2022-11-16 13:22:24','Popular Saturday','سبت الشعبيات'),(4,'2022-08-07 04:33:37','2022-11-16 13:20:47','Biryani Sunday','حد البرياني');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chefs`
--

DROP TABLE IF EXISTS `chefs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chefs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chefs`
--

LOCK TABLES `chefs` WRITE;
/*!40000 ALTER TABLE `chefs` DISABLE KEYS */;
INSERT INTO `chefs` VALUES (6,'Hazem Mahmoud','Head Chef','/1666018570-Picture1.png','حازم محمود','كبير الطهاة',NULL,NULL,NULL,'2022-10-17 16:56:10','2022-10-17 16:56:10');
/*!40000 ALTER TABLE `chefs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'2022-10-17 05:43:24','2022-10-17 05:43:24','Eric Jones','ericjonesmyemail@gmail.com','instead, congrats','Good day, \r\n\r\nMy name is Eric and unlike a lot of emails you might get, I wanted to instead provide you with a word of encouragement – Congratulations\r\n\r\nWhat for?  \r\n\r\nPart of my job is to check out websites and the work you’ve done with zeemfood.com definitely stands out. \r\n\r\nIt’s clear you took building a website seriously and made a real investment of time and resources into making it top quality.\r\n\r\nThere is, however, a catch… more accurately, a question…\r\n\r\nSo when someone like me happens to find your site – maybe at the top of the search results (nice job BTW) or just through a random link, how do you know? \r\n\r\nMore importantly, how do you make a connection with that person?\r\n\r\nStudies show that 7 out of 10 visitors don’t stick around – they’re there one second and then gone with the wind.\r\n\r\nHere’s a way to create INSTANT engagement that you may not have known about… \r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know INSTANTLY that they’re interested – so that you can talk to that lead while they’re literally checking out zeemfood.com.\r\n\r\nCLICK HERE http://boostleadgeneration.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be a game-changer for your business – and it gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately (and there’s literally a 100X difference between contacting someone within 5 minutes versus 30 minutes.)\r\n\r\nPlus then, even if you don’t close a deal right away, you can connect later on with text messages for new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is simple, easy, and effective. \r\n\r\nCLICK HERE http://boostleadgeneration.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://boostleadgeneration.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://boostleadgeneration.com/unsubscribe.aspx?d=zeemfood.com'),(2,'2022-10-17 11:04:15','2022-10-17 11:04:15','Eric Jones','ericjonesmyemail@gmail.com','There they go…','Hey, my name’s Eric and for just a second, imagine this…\r\n\r\n- Someone does a search and winds up at zeemfood.com.\r\n\r\n- They hang out for a minute to check it out.  “I’m interested… but… maybe…”\r\n\r\n- And then they hit the back button and check out the other search results instead. \r\n\r\n- Bottom line – you got an eyeball, but nothing else to show for it.\r\n\r\n- There they go.\r\n\r\nThis isn’t really your fault – it happens a LOT – studies show 7 out of 10 visitors to any site disappear without leaving a trace.\r\n\r\nBut you CAN fix that.\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know right then and there – enabling you to call that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE http://boostleadgeneration.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nTime is money when it comes to connecting with leads – the difference between contacting someone within 5 minutes versus 30 minutes later can be huge – like 100 times better!\r\n\r\nPlus, now that you have their phone number, with our new SMS Text With Lead feature you can automatically start a text (SMS) conversation… so even if you don’t close a deal then, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nStrong stuff.\r\n\r\nCLICK HERE http://boostleadgeneration.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://boostleadgeneration.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://boostleadgeneration.com/unsubscribe.aspx?d=zeemfood.com'),(3,'2022-10-18 18:13:46','2022-10-18 18:13:46','LzjKeuEdhCn','stanislavkomy3t2@outlook.com','jxneUBhTQ','kwWhtVKrx'),(4,'2022-10-18 18:13:47','2022-10-18 18:13:47','NMDREHPQmc','stanislavkomy3t2@outlook.com','RqCmwukTQHGza','DjdMTCVf'),(5,'2022-10-19 10:02:35','2022-10-19 10:02:35','Hello World! https://vei50j.com?hs=e3c07eb6d2d7d88c96ef50a90bb517fa&','x01mp3rx0z@mailto.plus','6vymtm','8hh3zq'),(6,'2022-10-22 12:22:17','2022-10-22 12:22:17','Eric Jones','ericjonesmyemail@gmail.com','Why not TALK with your leads?','My name’s Eric and I just found your site holocron.tech.\r\n\r\nIt’s got a lot going for it, but here’s an idea to make it even MORE effective.\r\n\r\nTalk With Web Visitor – CLICK HERE https://boostleadgeneration.com for a live demo now.\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you the moment they let you know they’re interested – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nAnd once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation… and if they don’t take you up on your offer then, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nCLICK HERE https://boostleadgeneration.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nThe difference between contacting someone within 5 minutes versus a half-hour means you could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Studies show that 70% of a site’s visitors disappear and are gone forever after just a moment. Don’t keep losing them. \r\nTalk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://boostleadgeneration.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://boostleadgeneration.com/unsubscribe.aspx?d=holocron.tech'),(7,'2022-10-24 02:00:35','2022-10-24 02:00:35','TDKqUPQV','stepanpopovzg@outlook.com','iCtIEXGyVKUMkdJ','upBiFfderYGtXQzL'),(8,'2022-10-24 02:00:36','2022-10-24 02:00:36','NElnReJpmPaIAZgd','stepanpopovzg@outlook.com','MEKamhNiBeSVlQj','lufbzIcv'),(9,'2022-10-24 23:29:47','2022-10-24 23:29:47','Wlasowces','a.tugushev@fccitw.bizml.ru','Предложу  бонусы  Замочи сайт конкурента вирусные базы','Можем предложить наши профессиональные услуги: \r\n\"Устранение сайтов ваших конкурентов!\" \r\nКаким образом это возможно выполнить?! \r\n- Практический опыт наших специалистов - больше десяти лет. \r\n- Конфиденциальная разработка. \r\n- Наращиваем ссылочную массу с помощью порно и вирусных ссылок. \r\n- Поисковик молниеносно реагирует на наши технологии. \r\n- Тексты с сайта спамятся, они становятся неуникальными. \r\n- У наших специалистов очень большие возможности и практический опыт в данном направлении. \r\n \r\nСтоимость  6000 рублей \r\nПолная отчётность. \r\nОплата: Киви, Яндекс.Деньги, Bitcoin, Visa, MasterCard... \r\n \r\nТелегрм: @xrumers \r\nSkype: Loves.Ltd \r\nWhatsApp: +7(977)536-08-36 \r\nмаил: support@xrumer.cc \r\nhttps://xrumer.art \r\nТолько эти! \r\nА тАкож Работаем со Студиями!'),(10,'2022-10-26 03:31:12','2022-10-26 03:31:12','Hazem Ahmed','hmahmoud94@gmail.com','حي الأشجار','هل يوجد رقم تليفون للتواصل'),(11,'2022-10-30 17:13:33','2022-10-30 17:13:33','Khaled Abbas','kmabbas1970@gmail.com','Hdbhdhdhjdjd','Can you Please make the order in a bag so I can pick and choose the quantities and then I fill the name and the address one time'),(12,'2022-10-31 01:07:44','2022-10-31 01:07:44','Moumen','Moumen.myousri@gmail.com','Test','Test');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `day_wmeal`
--

DROP TABLE IF EXISTS `day_wmeal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `day_wmeal` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wmeal_id` int unsigned NOT NULL,
  `day_id` int unsigned NOT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `days` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meal_id` int unsigned DEFAULT NULL,
  `wmeal_id` int unsigned DEFAULT NULL,
  `setting_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_meal_id_foreign` (`meal_id`),
  CONSTRAINT `images_meal_id_foreign` FOREIGN KEY (`meal_id`) REFERENCES `meals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (10,'images/3IrNO00YbpcCsx4rhDuQWFgCTMNqGK8IfsgHqcjj.png',NULL,2,NULL,'2022-09-03 17:44:01','2022-09-03 17:44:01'),(12,'2/1662633592-Biryani.PNG',2,NULL,NULL,'2022-09-08 12:39:52','2022-09-08 12:39:52'),(13,'3/1662633754-WhatsApp Image 2022-07-14 at 11.09.01 PM.jpeg',3,NULL,NULL,'2022-09-08 12:42:34','2022-09-08 12:42:34'),(14,'4/1662634269-WhatsApp Image 2022-07-17 at 11.26.50 PM.jpeg',4,NULL,NULL,'2022-09-08 12:51:09','2022-09-08 12:51:09'),(15,'5/1662634416-Sweet Potato.jpg',5,NULL,NULL,'2022-09-08 12:53:36','2022-09-08 12:53:36'),(16,'6/1662638847-Picture1.jpg',6,NULL,NULL,'2022-09-08 14:07:27','2022-09-08 14:07:27'),(17,'7/1662638967-Zemman.PNG',7,NULL,NULL,'2022-09-08 14:09:27','2022-09-08 14:09:27'),(18,'8/1662641410-Sweet Potato.jpg',8,NULL,NULL,'2022-09-08 14:50:10','2022-09-08 14:50:10'),(19,'9/1662641512-hawawshi-ground-beef.jpg',9,NULL,NULL,'2022-09-08 14:51:52','2022-09-08 14:51:52'),(20,'10/1662641654-hawawshi-ground-beef.jpg',10,NULL,NULL,'2022-09-08 14:54:14','2022-09-08 14:54:14'),(21,'11/1662641832-hawawshi-ground-beef.jpg',11,NULL,NULL,'2022-09-08 14:57:12','2022-09-08 14:57:12'),(22,'12/1662642350-Sweet Potato.jpg',12,NULL,NULL,'2022-09-08 15:05:50','2022-09-08 15:05:50'),(24,'1/1664894949-hawawshi-ground-beef.jpg',NULL,NULL,1,'2022-10-04 16:49:09','2022-10-04 16:49:09'),(25,'13/1666988055-Biryani.PNG',13,NULL,NULL,'2022-10-28 22:14:15','2022-10-28 22:14:15');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meals`
--

DROP TABLE IF EXISTS `meals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `meals` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int unsigned DEFAULT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `meals_category_id_foreign` (`category_id`),
  CONSTRAINT `meals_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meals`
--

LOCK TABLES `meals` WRITE;
/*!40000 ALTER TABLE `meals` DISABLE KEYS */;
INSERT INTO `meals` VALUES (1,'Duncan Fry','Eaque esse repudiand',300.00,'/1659260173-2.jpg','Tuesday',NULL,17,'2022-07-31 09:36:13','2022-07-31 16:48:58','Gisela Sandoval','Iusto culpa laudant','2022-07-31 16:48:58'),(2,'Chicken Biryani','Aromatic Basmati rice with chicken cubes marinated in authentic Indian Biryani masala served with yogurt salad - Meal for 2 persons',0.00,'2/1662633592-Biryani.PNG','Thursday',1,10,'2022-09-03 17:45:32','2022-11-07 11:30:05','برياني فراخ','أرز بسمتي بقطع الفراخ المخلية متبلة في خلطة البرياني الهندي الأصلية تقدم مع سلطة الزبادي - وجبة تكفي شخصين',NULL),(3,'Shrimp Biryani','Aromatic Basmati rice with shrimps marinated in authentic Indian Biryani masala served with yogurt salad - Meal for 2 persons',0.00,'/1662633754-WhatsApp Image 2022-07-14 at 11.09.01 PM.jpeg','Thursday',1,8,'2022-09-08 12:42:34','2022-10-30 15:42:33','برياني جمبري','أرز بسمتي  بالجمبري متبل في خلطة البرياني الهندي الأصلية تقدم مع سلطة الزبادي - وجبة تكفي شخصين',NULL),(4,'Veg Biryani','Aromatic Basmati rice with vegetables marinated in authentic Indian Biryani masala served with yogurt salad - Meal for 2 persons',0.00,'/1662634269-WhatsApp Image 2022-07-17 at 11.26.50 PM.jpeg','Thursday',1,0,'2022-09-08 12:51:09','2022-10-30 13:25:09','برياني خضار','أرز بسمتي بالخضار متبل في خلطة البرياني الهندي الأصلية تقدم مع سلطة الزبادي - وجبة تكفي لشخصين',NULL),(5,'Zatata Sweet','Zeem\'s style sweet potato tajin.',0.00,'/1662634416-Sweet Potato.jpg','Thursday',1,10,'2022-09-08 12:53:36','2022-10-28 23:24:00','حلو زطاطا','طاجن بطاطا على طريقة زيم.',NULL),(6,'Zeem Rice Tajin','Zeem\'s style Egyptian rice tajin with chicken cubes and milk served with yogurt salad - Meal for two persons.',0.00,'/1662638847-Picture1.jpg','Friday',2,8,'2022-09-08 14:07:27','2022-10-30 17:11:53','طاجن أرز زيم','طاجن أرز مصري بقطع الفراخ والحليب على طريقة زيم يقدم مع سلطة الزبادي - وجبة تكفي شخصين',NULL),(7,'Grilled Quails','One piece of grilled mega jumbo quail (300 gm) marinated in our special seasoning served with Tahini & Balady (local green) salad.',0.00,'/1662638967-Zemman.PNG','Friday',2,12,'2022-09-08 14:09:27','2022-11-17 15:37:42','سمان مشوي','فرد سمان مشوي حجم ميجا جامبو(300 جم) بتتبيلة زيم الخاصة  يقدم مع سلطة الطحينة والسلطة البلدي.',NULL),(8,'Zatata Sweet','Zeem\'s style sweet potato tajin.',0.00,'/1662641410-Sweet Potato.jpg','Friday',2,10,'2022-09-08 14:50:10','2022-10-28 23:24:14','حلو زطاطا','طاجن بطاطا على طريقة زيم.',NULL),(9,'Beef Zawawshi','Balady bread stuffed with fresh minced beef seasoned with Zeem\'s special species.',0.00,'/1662641512-hawawshi-ground-beef.jpg','Saturday',3,20,'2022-09-08 14:51:52','2022-10-28 22:12:32','رغيف زاواوشي لحمة','رغيف عيش بلدى باللحمة المفرومة الطازجة المتبلة ببهارات زيم الخاصة',NULL),(10,'Chicken Zawawshi','Balady bread stuffed with fresh minced chicken seasoned with Zeem\'s special species.',0.00,'/1662641654-hawawshi-ground-beef.jpg','Saturday',3,20,'2022-09-08 14:54:14','2022-10-28 22:12:45','رغيف زاواوشي فراخ','رغيف عيش بلدى بالفراخ المفرومة الطازجة المتبلة ببهارات زيم الخاصة Price',NULL),(11,'Tuna Zawawshi','Balady bread stuffed with Tuna seasoned with Zeem\'s special species.',0.00,'/1662641832-hawawshi-ground-beef.jpg','Saturday',3,20,'2022-09-08 14:57:12','2022-10-28 22:30:46','رغيف زاواوشي تونة','رغيف عيش بلدى بالتونة المتبلة ببهارات زيم الخاصة',NULL),(12,'Zatata Sweet','Zeem\'s style sweet potato tajin.',0.00,'/1662642350-Sweet Potato.jpg','Saturday',3,10,'2022-09-08 15:05:50','2022-10-28 23:25:01','حلو زطاطا','طاجن بطاطا على طريقة زيم.',NULL),(13,'Chicken Biryani','Aromatic Basmati rice with chicken cubes marinated in authentic Indian Biryani masala served with yogurt salad - Meal for 2 persons',0.00,'/1666987777-Biryani.PNG','Sunday',4,10,'2022-10-28 22:09:37','2022-10-28 22:09:37','برياني فراخ','أرز بسمتي بق الأصلية تقدم مطع الفراخ المخلية متبلة في خلطة البرياني الهنديع سلطة الزبادي - وجبة تكفي شخصين',NULL),(14,'Shrimp Biryani','Aromatic Basmati rice with shrimps marinated in authentic Indian Biryani masala served with yogurt salad - Meal for 2 persons',0.00,'14/1666989376-WhatsApp Image 2022-07-14 at 11.09.01 PM.jpeg','Sunday',4,10,'2022-10-28 22:19:25','2022-10-28 22:36:16','برياني جمبري','أرز بسمتي بالجمبري متبل في خلطة البرياني الهندي الأصلية تقدم مع سلطة الزبادي - وجبة تكفي شخصين',NULL),(15,'Veg Biryani','Aromatic Basmati rice with vegetables marinated in authentic Indian Biryani masala served with yogurt salad - Meal for 2 persons',0.00,'/1666988837-Capture.PNG','Sunday',4,10,'2022-10-28 22:27:17','2022-10-28 22:27:17','برياني خضار','أرز بسمتي بالخضار متبل في خلطة البرياني الهندي الأصلية تقدم مع سلطة الزبادي - وجبة تكفي لشخصين',NULL),(16,'Zatata Sweet','Zeem\'s style sweet potato tajin.',0.00,'/1666989028-Sweet Potato.jpg','Sunday',4,10,'2022-10-28 22:30:28','2022-10-28 23:25:14','حلو زطاطا','طاجن بطاطا على طريقة زيم.',NULL);
/*!40000 ALTER TABLE `meals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_delivery_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` enum('pending','accepted','rejected','completed') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meal_id` int unsigned DEFAULT NULL,
  `wmeal_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_meal_id_foreign` (`meal_id`),
  CONSTRAINT `orders_meal_id_foreign` FOREIGN KEY (`meal_id`) REFERENCES `meals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (26,'Hall Holmes','01017387318','Similique distinctio',903,NULL,'5:00 PM','rejected','Id rerum qui consequ',1,NULL,'2022-07-31 12:36:55','2022-07-31 16:37:40'),(27,'Brianna Head','01017387318','Distinctio Soluta c',23,NULL,'10:00 PM','rejected','Neque ut facilis nes',1,NULL,'2022-07-31 12:37:53','2022-07-31 16:37:38'),(28,'Benjamin Tyler','01017387318','Sed elit ducimus s',8,NULL,'5:00 PM','rejected','Voluptatum quis ut a',1,NULL,'2022-07-31 12:41:09','2022-07-31 16:37:37'),(29,'Jaden Marquez','01017387318','Sit nobis dolore re',49,NULL,'8:00 PM','rejected','Id et est aut itaqu',1,NULL,'2022-07-31 12:42:35','2022-07-31 16:37:36'),(30,'Yoko Norris','01017387318','Et veniam dolor dol',8,NULL,'9:00 PM','rejected','Quae quis ex ad a ut',1,NULL,'2022-07-31 12:45:13','2022-07-31 16:37:34'),(31,'Piper Perez','01017387318','Culpa anim dolorem e',9,NULL,'3:00 PM','rejected','Eius autem dolor et',1,NULL,'2022-07-31 12:51:47','2022-07-31 16:37:33'),(32,'George Golden','01017387318','Architecto soluta ni',86,NULL,'5:00 PM','rejected','Cupiditate quisquam',1,NULL,'2022-07-31 13:23:34','2022-07-31 16:37:30'),(33,'Edan England','01017387318','Quia atque neque deb',7,NULL,'2:00 PM','rejected','Perferendis nostrud',1,NULL,'2022-07-31 13:24:39','2022-07-31 16:37:28'),(34,'Hadassah Mclaughlin','01017387318','Aliquid irure sapien',1,NULL,'4:00 PM','completed','Alias nemo est adip',1,NULL,'2022-07-31 13:26:11','2022-10-25 01:19:03'),(35,'Aphrodite Jenkins','01017387318','Eaque deserunt dolor',1,NULL,'6:00 PM','completed','Voluptatibus consequ',1,NULL,'2022-07-31 13:29:11','2022-10-25 01:19:02'),(36,'Walker Callahan','01017387318','Veritatis sit laboru',3,NULL,'6:00 PM','completed','Iusto officia minima',1,NULL,'2022-07-31 13:30:11','2022-10-25 01:19:01'),(37,'MacKenzie Holmes','01017387318','Inventore nihil opti',2,NULL,'4:00 PM','completed','Ea perspiciatis fac',1,NULL,'2022-07-31 13:32:09','2022-10-25 01:18:59'),(38,'Florence Reynolds','01017387318','Nihil exercitation n',360,NULL,'3:00 PM','completed','Impedit eligendi co',1,NULL,'2022-07-31 13:35:12','2022-10-25 01:18:57'),(39,'Stewart Pate','01017387318','Ex laborum molestiae',32,NULL,'10:00 PM','completed','Optio quo eos rem m',1,NULL,'2022-07-31 13:36:59','2022-10-25 01:18:55'),(40,'Olivia Neal','01017387318','Aliqua Quos volupta',26,NULL,'2:00 PM','completed','Eaque labore quo ali',1,NULL,'2022-07-31 14:54:33','2022-10-25 01:18:52'),(41,'Fuller Hancock','01017387318','Voluptatibus vel qua',60,NULL,'3:00 PM','completed','Veniam similique se',1,NULL,'2022-07-31 14:55:38','2022-10-25 01:18:49'),(42,'Ethan Barber','01017387318','Quia qui culpa veli',173,NULL,'6:00 PM','completed','Irure ut dolore alia',1,NULL,'2022-07-31 14:56:31','2022-10-25 01:18:47'),(43,'Calvin Roberson','01017387318','Sequi aut est ut bea',47,NULL,'7:00 PM','completed','Sint rem cupidatat e',1,NULL,'2022-07-31 14:57:54','2022-10-25 01:18:44'),(44,'Lacey Wheeler','01017387318','Velit molestiae ut u',82,NULL,'5:00 PM','completed','Aliqua Reprehenderi',1,NULL,'2022-07-31 14:59:27','2022-10-25 01:18:42'),(45,'Oscar Fuentes','01017387318','Excepteur aut conseq',183,NULL,'3:00 PM','completed','Cupidatat quod odio',1,NULL,'2022-07-31 15:00:33','2022-10-25 01:18:39'),(46,'Wesley Zamora','01017387318','Rem odio ut eos inc',10,NULL,'10:00 PM','completed','Enim error autem aut',1,NULL,'2022-07-31 15:05:35','2022-10-25 01:18:37'),(47,'Autumn Cross','01017387318','Cillum ducimus illu',10,NULL,'5:00 PM','completed','Veritatis qui tempor',1,NULL,'2022-07-31 15:06:20','2022-10-25 01:18:34'),(48,'Illana Harris','01017387318','Ab aliquam explicabo',70,'Thursday','2:00 PM','completed','Omnis aspernatur fug',NULL,1,'2022-07-31 16:05:19','2022-10-25 01:18:32'),(49,'Justin Burton','01017387318','Unde illum voluptat',20,'Thursday','7:00 PM','completed','Tempora aut sed offi',NULL,1,'2022-07-31 16:06:10','2022-10-25 01:18:29'),(50,'Hazem Mahmoud','01001172577','https://maps.app.goo.gl/yJ6xYLwWzJj9h8UR8?g_st=iw',2,NULL,'3:00 PM','completed','No hot Spicies',11,NULL,'2022-09-09 11:36:08','2022-10-25 01:18:27'),(51,'h','01001172577','vv',2,NULL,'3:00 PM','completed',NULL,6,NULL,'2022-10-13 13:30:16','2022-10-25 01:18:25'),(52,'H','01001172577','Xx',2,NULL,'2:00 PM','completed',NULL,6,NULL,'2022-10-13 13:30:43','2022-10-25 01:18:22'),(53,'Hazem Ahmed','01001172577','حي الأشجار - طريق الواحات',2,NULL,'3:00 PM','accepted',NULL,3,NULL,'2022-10-25 01:14:32','2022-10-25 01:18:00'),(54,'رشا الجندي','01001172577','حي الأشجار - طريق الواحات',1,NULL,'6:00 PM','accepted',NULL,2,NULL,'2022-10-25 13:53:51','2022-10-25 13:54:43'),(55,'Hazem Ahmed Mahmoud Mohamed','01001172577','حي الأشجار - طريق الواحات',2,NULL,'7:00 PM','rejected',NULL,7,NULL,'2022-10-25 13:56:07','2022-10-25 13:56:28'),(56,'Hazem Ahmed Mahmoud Mohamed','01001172577','حي الأشجار - طريق الواحات',8,NULL,'5:00 PM','rejected',NULL,7,NULL,'2022-10-25 14:00:11','2022-10-25 14:00:57'),(57,'ahmed','01120305686','test',1,NULL,'2:00 PM','rejected','test',2,NULL,'2022-10-30 13:49:23','2022-10-30 13:49:57'),(58,'test','01120305686','test',2,NULL,'8:00 PM','rejected','test',2,NULL,'2022-10-30 14:07:33','2022-10-30 14:19:38'),(59,'Ahmed Refaat','01120305686','test',10,NULL,'7:00 PM','rejected','test',2,NULL,'2022-10-30 14:26:32','2022-10-30 14:26:49'),(60,'ahmed','01120305686','test',10,NULL,'7:00 PM','rejected','test',2,NULL,'2022-10-30 14:29:38','2022-10-30 14:29:48'),(61,'ahmed','01120305686','test',3,NULL,'8:00 PM','rejected','test',2,NULL,'2022-10-30 14:30:50','2022-10-30 14:31:03'),(62,'ahmed','01120305686','test',5,NULL,'8:00 PM','rejected','test',2,NULL,'2022-10-30 14:31:18','2022-10-30 14:31:26'),(63,'Hazem Ahmed Mahmoud Mohamed','01001172577','حي الأشجار - طريق الواحات',2,NULL,'3:00 PM','rejected',NULL,2,NULL,'2022-10-30 15:31:14','2022-10-30 15:31:50'),(64,'Hazem Ahmed Mahmoud Mohamed','01001172577','حي الأشجار - طريق الواحات',2,NULL,'3:00 PM','rejected',NULL,2,NULL,'2022-10-30 15:32:48','2022-10-30 15:34:07'),(65,'Rasha','01004003922','حي الأشجار',2,NULL,'7:00 PM','pending','لذيذ',3,NULL,'2022-10-30 15:42:33','2022-10-30 15:42:33'),(66,'Khaled Abbas','01001180202','89R Pyramids Walk Compound mall Misr street',6,NULL,'5:00 PM','pending',NULL,7,NULL,'2022-10-30 17:11:04','2022-10-30 17:11:04'),(67,'Jjjdhdhhds','01001180202','Hhshshd',2,NULL,'5:00 PM','pending',NULL,6,NULL,'2022-10-30 17:11:53','2022-10-30 17:11:53'),(68,'Hairhem','01223142990','167 aly saman',2,NULL,'9:00 PM','rejected','Call upon arrival',2,NULL,'2022-11-06 19:08:20','2022-11-07 11:30:05'),(69,'hazem','01001172577','xx',2,NULL,'3:00 PM','pending',NULL,7,NULL,'2022-11-17 15:37:42','2022-11-17 15:37:42');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fb_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline_en_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline_en_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline_en_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline_ar_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline_ar_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline_ar_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en_1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `desc_en_2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `desc_en_3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `desc_ar_1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `desc_ar_2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `desc_ar_3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_en` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_ar` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_text_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `menu_text_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contact_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_hour` time DEFAULT NULL,
  `end_hour` time DEFAULT NULL,
  `tax` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,NULL,'2022-11-14 14:01:22','https://www.facebook.com/','https://www.instagram.com/','https://twitter.com/','01001172577','When food creates memories',NULL,NULL,'أحلى الذكريات مع أكلاتنا​','​','​','Our signature on exceptional dishes will bring you joy and turn any day into<br />\r\na special occasion with loved ones, bite by delicious bite.<br />\r\nWith a focus on delivering exceptional quality, we provide our small curated menu <br />\r\nof carefully selective dishes echoing Mediterranean roots, along with irresistible Indian Biryanis.<br />\r\nEach dish is created with the care and quality ingredients it deserves.','','','لمستنا الخاصة لكل طبق عندنا حيخلي لكل أكلة ذكرى جميلة وممتعة مع الأهل والأصحاب<br />\r\nولأن هدفنا هو تقديم وجبات متميزة بجودة عالية، عملنا منيو محدودة ولكنها متنوعة ومختارة بعناية ما بين أطباق لها جذور شرقية بالإضافة إلى البرياني الهندي اللي ما حدش يقدر يقاومه، كل طبق له لمسة سحرية خاصة بينا و كل طبق مصنوع بالعناية وجودة المكونات اللي يستحقها.','','','1/1667130645-Topbanner.png','It is a bold decision for someone to change his career to follow his passion, especially after 26 years working for a multinational company as an engineer....<br /><br />\r\nHazem (Zeem) raised in a home, where food was celebrated and enjoyed, with skills and recipes passed down through generations, he has nurtured a love of cooking since his earliest years. From hours of watching his mother making countless dishes from memory, step by step, until the time when he too was able to recreate them, capturing the flavours, colours and textures with his own signature. His mom\'s passion for cooking and joy in sharing her dishes had inspired a dream that one day she might have a small business, cooking for people who appreciated and enjoyed excellent cuisine. It was to come true through her son Hazem.<br /><br />\r\nIt took him courage to walk away from an established career following his heart, and so, Zeem came into being.','قرار مش سهل ان حد يغير حياته المهنية علشان يمشي ورا شغفه خاصةً بعد 26 سنة من العمل كمهندس في شركة عالمية ....<br /><br />\r\nحازم (Zeem) نشأ في بيت كان أهله بيقدروا الأكل وبيستمتعوا به .. والدته ورثت موهبة الطبخ  والنَفَس الحلو في أي أكلة كانت بتعملها حتى ولو بسيطة. من صغره كان يقف يتفرج عليها وهي بتطبخ في حب وسعادة وكانت أجمل لحظاتها مع إحساسها بإن الأكلة الحلوة تكون سبب في ذكرى حلوة، وإن الناس تفتكر أكلاتها دايمًا بسعادة.<br /><br />\r\nحلمها كان إنها تعمل مشروع صغير تطبخ فيه لكل الناس علشان يستمتعوا بالأكل مع أحلى الذكريات. حازم شغفه بالطبخ كان بيزيد يوم بعد يوم لحد مقدر يحضر أكلاتها ولكن بلمسته الخاصة.<br /><br />\r\nوبعد سنين، وبخطوة جريئة منه ، قرر أنه يغير حياته المهنية ويسيب الوظيفة ويحقق حلم والدته، ويخلي عند كل واحد ذكرى حلوة مع أكلة ممتعة من Zeem.','1/1666745206-Top Banner 1.png','<p style=\"text-align:left\">•	Our menu rotates over four days per week of our operation (Thursday to Sunday) to ensure that every dish is made freshly.<br />\r\n•	Each of the four day has its own meal which consists of main dishes and dessert.<br />\r\n•	To place an order, you just need to choose desired delivery day / meal and select your dishes.<br />\r\n•	Orders need to be placed online within the week, at least one day ahead delivery day.<br />\r\n•	All types of meat; minced beef, quails, chicken and shrimps are fresh and of the highest quality in the market<br />\r\n•	Our special spices are all home made from scratch.<br />\r\n•	We only use 100% natural ghee and butter without any hydrogenated oil.<br />\r\n•	Our special spices and masala are all home made from scratch.<br />\r\n•	We also look forward to adding to the menu a little later to further excite your taste buds.<br />\r\n•	Currently, we only deliver in 6th of October and Shiekh Zayed areas.','<p style=\"text-align:right\">•	المنيو بنقدمها خلال 4 أيام فقط من كل أسبوع (من الخميس للأحد) علشان نضمن إن كل أطباقنا تتعمل طازة.<br />\r\n•	كل يوم من الأربع أيام له وجبته الخاصة اللي بتتكون من أطباق رئيسية وحلو.<br />\r\n•	كل اللي عليك هو تحديد يوم الوجبة وبعد كده تختار الأطباق اللي انت عايزها.<br />\r\n•	الطلبات بتكون أون لاين خلال الأسبوع على الأقل  قبل الديليفري بيوم.<br />\r\n•	جميع اللحوم المستخدمة من لحم بقري , فراخ , سمان , جمبري كلها طازة و من أجود الأنواع  اللي موجود في السوق.<br />\r\n•	كل أطباقنا معمولة بسمن وزبدة طبيعي 100% بدون استخدم أي زيوت مهدرجة.<br />\r\n•	خلطات البهارات المستخدمة في أطباقنا كلها بيتي من الألف إلي الياء .. بمعنى إنها مش موجودة في السوق.<br />\r\n•	علشان نفتح شهيتكم كمان وكمان حنقوم بإضافة بعض الأطباق الجديدة للمنيو قريباً.<br />\r\n•	حالياً احنا بنغطي منطقة الشيخ زايد و 6 أكتوبر فقط.','1/1667131210-Topbanner.png','1/1662642185-Biryani.PNG','Thursday','Sunday','14:00:00','22:00:00','45873','1/1667440745-Topbanner1.png');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wmeals` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
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

-- Dump completed on 2022-11-26 12:00:23
