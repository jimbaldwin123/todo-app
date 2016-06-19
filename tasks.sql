-- MySQL dump 10.13  Distrib 5.7.12, for Linux (x86_64)
--
-- Host: localhost    Database: laravel2
-- ------------------------------------------------------
-- Server version	5.7.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `tasks_project_id_foreign` (`project_id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` VALUES (5,1,'Priority and due date fields','Priority-and-due-date-fields',0,'Priority field','2015-03-07 00:59:53','2015-03-10 20:37:12'),(4,1,'CSV Import/Export tasks','csvimport_exporttasks',0,'add/replace','2015-03-07 00:57:58','2015-03-07 00:57:58'),(7,1,'Roles, role-based views','roles_role-basedviews',0,'Roles, role-based views','2015-03-07 01:01:35','2015-03-07 01:01:35'),(8,1,'Email notifications','emailnotifications',0,'Email notifications','2015-03-07 01:01:58','2015-03-07 01:01:58'),(9,1,'Attach files to tasks','attachfilestotasks',0,'Attach files to tasks, or have a separate file area linkable from tasks.','2015-03-07 01:03:03','2015-03-07 05:53:03'),(10,1,'Control field widths on task listing','controlfieldwidthsontasklisting',1,'Control field widths on task listing - account for responsive.','2015-03-07 01:03:59','2015-03-12 08:30:19'),(11,1,'Categories, urgencies, urgent views, category views','categories_urgencies_urgentviews_categoryviews',0,'Categories, urgencies, urgent views, category views','2015-03-07 01:07:29','2015-03-07 01:07:29'),(12,1,'filters and sorting','filtersandsorting',1,'filter on fields\r\nsort on col heads\r\nfilter on completed\r\nmaybe use ajax for some or all','2015-03-07 01:08:29','2015-04-07 21:26:32'),(13,1,'pagingination','pagingination',0,'pagination','2015-03-07 01:08:46','2016-02-27 00:32:04'),(14,1,'dynamic title tags and meta description','dynamictitletagsandmetadescription',0,'dynamic title tags and meta description','2015-03-07 01:09:23','2015-03-07 01:09:23'),(15,1,'Project-task hierarchy','project-taskhierarchy',1,'Project-task hierarchy or merge this look-feel to the L5 app.','2015-03-07 01:11:33','2015-03-08 02:48:22'),(16,1,'Task with multiple parents','taskwithmultipleparents',0,'Task with multiple parents','2015-03-07 01:21:16','2015-03-07 01:21:16'),(17,1,'Better all-around navigation','betterall-aroundnavigation',0,'Better all-around navigation - nav buttons on various screens.','2015-03-07 03:09:41','2015-03-19 21:05:48'),(19,1,'delete project','deleteproject',0,'options: \r\ndon\'t allow deletion of non-empty projects\r\nallow but give option of deleting child tasks or reassigning tasks\r\n\r\n','2015-03-07 04:24:35','2015-03-07 05:54:13'),(20,1,'tinymce','tinymce',0,'tinymce','2015-03-07 04:24:57','2015-03-19 21:02:02'),(21,1,'project owner and currently assigned to','projectownerandcurrentlyassignedto',0,'project owner and currently assigned to','2015-03-07 04:25:18','2015-03-07 04:25:18'),(22,1,'delete goes to an are you sure page','deletegoestoanareyousurepage',0,'delete goes to an are you sure page','2015-03-07 05:05:26','2015-03-07 05:05:26'),(24,1,'Finish styling, especially forms','finishstyling_especiallyforms',1,'Finish styling, especially forms','2015-03-07 05:06:31','2015-03-07 05:55:00'),(39,1,'Offline mode','Offline-mode',0,'Offline mode','2015-03-08 20:51:23','2015-03-08 20:51:23'),(26,1,'Filter results implementation','filter-results',0,'Better results filter implentation.','2015-03-07 23:11:11','2015-03-07 23:11:11'),(45,1,'show task count on project index page','show-task-count-on-project-index-page',0,'show task count on project index page','2015-03-09 06:54:59','2015-03-09 06:54:59'),(28,1,'auto-generate slug','auto-generate slug',1,'auto-generate slug, maybe auto-populate description, too.','2015-03-08 00:04:47','2015-03-08 03:55:40'),(29,1,'Add task count to project list page and  task list page','task-count',0,'Add task count to project list page and  task list page','2015-03-08 00:05:43','2015-03-08 00:05:43'),(30,1,'collect app js functions in app js file','collect-app-js-functions-in-app-js-file',1,'collect app js functions in app js file','2015-03-08 00:06:42','2015-04-07 21:31:59'),(32,1,'sort by column heads','sort-by-column-heads',1,'sort by column heads','2015-03-08 00:08:11','2015-04-07 21:29:13'),(34,1,'automate database backups','automate-database-backups',0,'automate database backups','2015-03-08 00:13:34','2015-03-08 00:13:34'),(36,1,'Reports - print, save to excel, etc.','reports',0,'Reports - print, save to excel, etc.','2015-03-08 00:18:36','2015-03-08 00:18:36'),(40,1,'add validation rules to slug field','add-validation-rules-to-slug-field',0,'add validation rules to slug field','2015-03-08 21:02:10','2015-03-08 21:02:10'),(41,1,'edit-delete buttons on single task record','edit-delete-buttons-on-single-task-record',0,'edit-delete buttons on single task record','2015-03-08 21:02:38','2015-03-08 21:02:38'),(42,6,'Dev Books','Dev-Books',0,'Code Bright L4 by Dayle Rees (L5 will be Code Smart)\r\nLaravel Testing Decoded by Jeffrey Way\r\nJavascript: The Good Parts by Douglas Crockford\r\nThe Pragmatic Programmer\r\n','2015-03-08 21:55:47','2015-03-13 22:18:55'),(43,2,'forums','forums',0,'forums','2015-03-08 23:21:17','2015-03-08 23:21:17'),(44,7,'Movies','Movies',0,'Night in the Museum\r\nDeath to Smoochy\r\nIron Giant','2015-03-08 23:48:16','2015-03-19 21:00:43'),(46,1,'show task count on project index page','show-task-count-on-project-index-page',1,'shiw','2015-03-09 06:55:58','2015-04-07 21:27:13'),(47,8,'video scrubber','video-scrubber',0,'video scrubber','2015-03-09 09:33:12','2015-03-09 09:33:12'),(48,8,'lightbox','lightbox',0,'lightbox','2015-03-09 09:43:53','2015-03-09 09:43:53'),(49,8,'carousel','carousel',0,'Carousel','2015-03-09 09:58:35','2015-03-09 10:01:11'),(50,8,'AJAX modal','AJAX-modal',0,'AJAX modal','2015-03-09 10:04:26','2015-03-09 10:04:26'),(51,1,'font color on xs screen','font-color-on-xs-screen',1,'font color on xs screen','2015-03-09 10:06:03','2015-03-19 21:04:11'),(59,9,'RSA keys for github','RSA-keys-for-github',0,'RSA keys for github','2015-04-08 00:08:34','2015-04-08 00:08:34'),(60,1,'Auto-generate slugs for Projects','Auto-generate-slugs-for-Projects',0,'Auto-generate slug for Projects','2015-04-08 00:09:04','2016-02-24 21:40:18'),(53,3,'Main','Main',0,'phpunit\r\ndocblock - tools for phpdocumentor doxygen etc\r\nphp storm or free alt\r\ngit \r\nbasecamp\r\nconfluence\r\n\r\nlibrary of docs - 106 checklist, things like that. ref material - maybe online wiki','2015-03-10 20:39:33','2015-03-10 20:39:33'),(54,3,'webdev excel, ppt, word templates','webdev-excel_-ppt_-word-templates',0,'webdev excel, ppt, word templates','2015-03-10 21:40:10','2015-03-10 21:40:10'),(55,5,'Nightly backups to S3','Nightly-backups-to-S3',1,'Nightly backups to S3','2015-03-12 01:10:28','2015-03-12 01:10:28'),(61,1,'add sort direction arrow icon to column heads','add-sort-direction-arrow-icon-to-column-heads',0,'add sort direction arrow icon to column heads','2016-02-27 00:33:09','2016-02-27 00:33:09'),(57,1,'My account page - request account page','My-account-page---request-account-page',0,'tasks per page\r\nACL group - admin access only\r\nemail address\r\n\r\nacct request goes to admin for approval\r\nnotify of failed login attempts -- phone or sms alert','2015-03-12 20:26:25','2015-03-12 20:26:25'),(58,1,'Refine mobile layout','Refine-mobile-layout',0,'Refine mobile layout','2015-03-12 21:13:15','2015-03-12 21:13:15'),(62,0,'dfsg','sdf',0,'safsadfasdasdfsdfasd','2016-06-12 01:11:06','2016-06-12 01:11:06'),(63,0,'dfsg','sdf',0,'safsadfasdasdfsdfasd','2016-06-12 01:11:32','2016-06-12 01:11:32'),(64,0,'dsfgdfsdsf','sadfasdfas',0,'sadfasdf','2016-06-12 01:12:30','2016-06-12 01:12:30');
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-18 16:28:31
