/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.7.33 : Database - jpcarpet
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jpcarpet` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `jpcarpet`;

/*Table structure for table `blogs` */

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `categories_id` bigint(20) DEFAULT NULL,
  `blog_thumbnail` varchar(255) DEFAULT NULL,
  `blog_name` varchar(255) DEFAULT NULL,
  `i_frame_link` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive','hold','rejected') DEFAULT 'hold',
  `description` text,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `blogs` */

insert  into `blogs`(`id`,`user_id`,`categories_id`,`blog_thumbnail`,`blog_name`,`i_frame_link`,`status`,`description`,`meta_title`,`meta_description`,`meta_keywords`,`created_at`,`created_by`,`updated_at`,`updated_by`) values (2,1,1,'uploads/blogss/1/1665779014docker-container-status-tag-7.png','George Allen','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4kw4xGtG9Q4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','active','<p>Voluptatem vitae nat.aaaaaaaaa</p><p>aaaaaaaaa</p><p>aa</p><p>aaaaaaaaaaaaaaaaaaaaaaa</p><p>aaaaaaaaaaaa</p><p>aaaaaaaaaaaaaaaaaaaaaaaaaaaa</p><p>aaaaaaaaaaaaaaaaa</p><p>aaaaaaaaaaaaaaaaaaaaaaaaaa</p><p>aaaaaaaaaaaaa</p><p>asd asd jas dkasda</p><p>as daskld las as d</p><p>ada sd asl</p><p><img src=\"data:image/png;base64,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\"> </p><p>sda sd</p>','Laborum Ab in id u','Vel nostrum quia mol','Dolorem dolore dolor','2022-09-01 20:23:34',1,'2022-10-15 19:56:52',1),(3,1,1,'uploads/blogss/1/1665860079logo-dark (1) - Copy.png','Dean Bridgesa','Dolor ratione numqua','active','<p>sadas d asd askdals dlsalk dkas das dk askd as d asldk ask d</p><p>as dkas ld sal d;kas;kd as</p><p>a s;dkasl dkas</p><p>maskd </p><p><img src=\"data:image/png;base64,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\">Eiusmod rerum omnis .</p>','Impedit dolore reic','Facilis unde a aliqu','Voluptatem dolores n','2022-10-15 18:54:40',1,'2022-10-15 21:13:47',1),(4,1,3,'uploads/blogss/1/1665869594logo-dark.png','Shaeleigh Mendoza','Reiciendis ut dolore','active','<p>Vel quia voluptatibu.</p>','Dolor fugiat aut no','Sint a eum a quas f','Ut delectus ut et n','2022-10-12 21:33:14',1,'2022-10-15 21:33:14',NULL),(5,1,1,'uploads/blogss/1/1665779014docker-container-status-tag-7.png','George Allen','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4kw4xGtG9Q4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>','active','<p>Voluptatem vitae nat.aaaaaaaaa</p><p>aaaaaaaaa</p><p>aa</p><p>aaaaaaaaaaaaaaaaaaaaaaa</p><p>aaaaaaaaaaaa</p><p>aaaaaaaaaaaaaaaaaaaaaaaaaaaa</p><p>aaaaaaaaaaaaaaaaa</p><p>aaaaaaaaaaaaaaaaaaaaaaaaaa</p><p>aaaaaaaaaaaaa</p><p>asd asd jas dkasda</p><p>as daskld las as d</p><p>ada sd asl</p><p><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMkAAAApCAYAAACfgg2HAAAACXBIWXMAAAsSAAALEgHS3X78AAAKLUlEQVR4nO1dzY4iNxA2q70PbzBEQVyXKNynV5p7Jk+wzBNMrxQpp2jYJ9jOEyzzBCGH5IS0zCE3pDDXEVLgDUDKnajIZ8aYKrvczLKrxJ+EMgvd7mq7PtePy05js9mYjIwMGS9y32RkhJFJkpERQSZJRkYELzUd1Gj3+sYY+syMMYPNfLo6tmMb7V7LGFMYY7r4cKDnVJv5dKJs88pprylcNtrMp1WCjNRmy5GRZFmgHVU/NNq9LvqvifeZae7DvU3cW+CZQ+G6ErIuMEYL7TO8+w/G2JFfGqcQZnjnqDzl42XT0YkicOmw6ozZfmDa7Dpj2IJOzfCZVJ1xdAyjgXuj3RsYY26dr5ab+bSlEVBoj+4lJf0u4bbXElGgRCU+Z8r2ft7Mp2VARhogeu+LSDt3MYXE+84c2dakBFolbrR7E0+Od5v5dOBd448RPaPQkrHR7tF43DhfPWzm064j/1+adgIgeVrSpAJyDEBE7Ri+qzrjgfRj+XjZR5vnEbno3asQWTTuls/oc1iWZGC2+iuRIJwMW2CGm0BBtJ1rPIXw26RO+6ggCOENvU+kPwpPtjMogxa+HFxf+N/RM4aYQDTw5XmFviXUGmtGHtYKlY+XBazfTeIYsjpBhCsfL0knPkQIYuUi3VnA4rCoG5OIDJbQaPfIPL6v+bwDOAR5VeP2tdDmLESgAD6AXBy0ivrcoH6ZKInCKecnlxuz/cdEcoTaa0InNBOcC3r+n5DnABqScL5fkjXBtW8SBbewJtFtz3ZG3c49cLVA4jqEs7gR+kQdfxwBiaApRJFQSZNKAh58dxkztyo2ZLAWJuq6k6ZFxVmUaOBOgSJ8Xt90DQQC7cGJQSTcwdxy2AZXjC87DBDkgQJc4bcV2ttTXMQgEonXeJ6VoRW4tmq0e+qA/rmwmU9HjXbvGi6GD0uUoo5cdA/GsF/TuiyEZENoDH8NTC4LBNx7OlM+Xg4CBFl6uloI1uYM1+0RRZXdAiH8AdhaEynb4t3LdcY9dXyNLExXiGnWaE8iSAgSiYnApa9cmDRGzKCc4X3FpMCnAiYz86mIcsSsfwC4NZxCkzL3q85Ylc20gJsl9fnbqjM+kB2x0IjRzVckn5s9U8UkIMKS+UkTm1wx35H5LVIJAkidUdQhCEjHDdjdZj7tc0oFuQtYLR/PEejWAsbpWrj3OVyvPVBbFItRBg4ThxacTmwzcqkEAaSs2DVHEAKeUwiu5J58KYE71wnB2ARuDCc810lacFmNdylrDwpZ1jFrAPJw736G9/4sODFRRkh0kOtyG0he+OA8gdJ3ofZ+/DdrVZaPl0MmwOb6+z62llJ1xjNhnPfkU5OkpjVhha9pQSy4tJ5qYUkAl/obatwSEJOzJnUW3Z4NpyAK4hTfr9da0Xvv3w+KxcERsqMUD35ADGLB9beWsKz34QbweySB+STfdtNo9xaMlUi2JgzqmFMrH6t8R5KOU5YUGblrT572JaWldSjbRycgCregrM02kvV+7XyClhcK6xPS9QC4iVPlWWARkZvodn3jB+6lk7k5R/5/YpXw2EyX//AaOFXWKEXGz7UOsgPKcX5x/m3jKVUwf2p5oZgpExHXx7FU77ONy86SOOUdPvwZQ7Im2jij9qBIFkOyMEpwbabIyF0bs2yqAUx4L39M3sAdUlkU5TOeDYgvBs7n2GQHFwao+g6ZMY5wuwnZdbek2qe92TsQm3AE4wbg1ZGzF2caj0m5cmb5SuOK4D1ipp6zftoJhbuOIyA3yLvJTUGUU2OEchD78WOMVHBjqCUepztrBPVbbEkSsCL3QtaIc60ufOXHKiuXYquO8Ic54r2pW08mBG5nMfcR8nPXLN0+w99+H5zHUqawItqJJ4oIUU4NbuIoQ/VTEXBjeEHZsNBteN4t89NeH1tLIlkRaSClUgXuei7LcIw/LGUtPiTm6reAC+dnWwjfIf9/EKBC7llCpo377hYFnwcAQbiFrnWgmiCKL4go3BjSu05qul4jQR/fl4+XFVyqPYBA0oSzXwZlvv62CRPuDwhZEVGJmfJsi72ydsy4XPsWDxBWCsqHfizClHa7sIokxQUHZRJQyj+ldwWJJoglioCLwpaEM+XyLpYYlBlcpFCJzEGZPNrn9juEthf0hWBedb95mig++t9v5tNGpN0tUKkrFSIunX07RioFqjrj3bOg9FIB7RrtuX0sVQjT+sqe3hNJpMZjnaQml599ScTB/gunwLGuP63Zk1EHxypmCLs9HkzbSSRRyvOpSRKaOFRwSWLixNNgq2v+ouYLITi8j+0GDNTzXPguCspF6pr5g/0Xzmp33erUAzcHpLmr2R7hOtRnsF512384JisYkOezuV5QRKkspC6uhMSOBrYs5sADkVbctb69uowag/L9c3UKAuKWEE/UbZOI9zbxtjVm3eg6Uc3271GXFloj4hRDUzEQIkosjc0ldJLGFhkkqQYuhoNxx/pLUWMyegBB2AXIF15QuYYrosqgYOCuvJSwWHYCi0KK/S6hQ9dSpomeD9fuOrGjxZIF7H//StHRa7xHS9tfie0vYZ00lbt+/0hZSU4ezsJFS4cgk39fcqUwKWbVGXcxhtzSAocHKe1PRKk64z5W82MT6BJFkF2JIMbucYd/WXBBsgbOYQUrzYy6e/jTc0NQy+QcLhHagy/tb+DaazKHEmwPEkghRqT9wlv4WqD9pIJNpy9X2oMuhPvV/WOeYpsWZK6debNAWrYbGMOVVNkrtNdiDhvZ9nGIGC7yCY4ZGRHkc7cyMiLIJMnIcMBVgmSSZGQAIMgIh4LskEmSkfGEpj2t07UoOXDPyHCADOnKTbtrT0vJ+J8AqeDFkbs9Wfin66Bmrhko5Rk5RYi0XnSFEic6waZwavjsmQQT50hWW6UwQNqeLMPVze/NK6dO7w732Yrui5vfm0vnTOQttiTB8SoZ/20sQgctONiud5FfTms17sxq/8alLbuWQ98TqeCitECylf3ePM3QpbfwWWHbBB2obbceL0CchT28G0r7Hr9XqCDvgyC/ggzURhPnj9lzwir8feEQidr9yRjzN2oWJ845XHcopBy45Vovsdnl2MK+jC8fa5oMtQto5imQtSVK9gBqWw60XUDGbF7AAtkT3AfYBtCHMi8CpU5u7aC7DXwBJS+d8qMS14ycFXer0LeQwRZt2lV5uvYPY8xv+Jva+gH/LZ3F5yXaKvydo1KBY8Z/D2cJRZL2fw/hp0Nn0Jemd6KlSwB7gmXXcXW6gVqw0nnOxHGbbOnLEO1UmOUnzvf2nluvLOkbx8UiTI0xPzrl9xNnP9AIn3O4auf+PpOX6LiTnziYcXJoyzl2ZUBwoSqHEHafzsr5rg/9mXlEKJ3vbSGjX7YyxDV9p32/Vm1gS14a7d5bT7ZvQFqXNG8dIhiQy1ol+xz3/0+yva58vFxZV9E/3ihntzK+GNjau5TasVMgkyQjI4K8mJiREUEmSUZGCMaYfwCzItPpECE7mQAAAABJRU5ErkJggg==\"> </p><p>sda sd</p>','Laborum Ab in id u','Vel nostrum quia mol','Dolorem dolore dolor','2022-08-17 20:23:34',1,'2022-10-15 19:56:52',1),(6,2,4,'uploads/blogss/2/1665871576docker-container-status-tag-7.png','Rafael Travisa','Possimus sed molest','active','<p>Ab ducimus, magna in.</p>','Voluptatem Quisquam','Incidunt alias lore','Sed quia cumque aute','2022-10-15 22:06:16',2,'2022-10-15 22:20:51',2);

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `categories` */

insert  into `categories`(`id`,`user_id`,`name`,`created_at`,`created_by`,`updated_at`) values (1,1,'asdasdasd','2022-10-14 13:00:12',NULL,'2022-10-14 13:02:56'),(3,1,'asd','2022-10-14 13:14:25',NULL,'2022-10-14 13:14:25'),(4,1,'Christine Knapp','2022-10-14 13:14:38',NULL,'2022-10-14 13:14:38');

/*Table structure for table `contact_us` */

DROP TABLE IF EXISTS `contact_us`;

CREATE TABLE `contact_us` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `message` text,
  `created_at` datetime DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `contact_us` */

insert  into `contact_us`(`id`,`name`,`email`,`city`,`message`,`created_at`,`created_by`,`updated_at`,`updated_by`) values (2,'asd','sad@gmail.com','sad','adds fas k askj dand kjasndkjasn','2022-10-14 17:29:11',NULL,NULL,NULL),(3,'Barry Raymond','kaxif@mailinator.com','Sint cillum autem no','Voluptatem excepturi','2022-10-15 16:57:18',NULL,'2022-10-15 16:57:18',NULL);

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2022_10_14_090212_laratrust_setup_tables',2);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `permission_role` */

DROP TABLE IF EXISTS `permission_role`;

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permission_role` */

insert  into `permission_role`(`permission_id`,`role_id`) values (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(1,2),(2,2),(3,2),(4,2),(9,2),(10,2);

/*Table structure for table `permission_user` */

DROP TABLE IF EXISTS `permission_user`;

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permission_user` */

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`name`,`display_name`,`description`,`created_at`,`updated_at`) values (1,'users-create','Create Users','Create Users','2022-10-14 09:03:56','2022-10-14 09:03:56'),(2,'users-read','Read Users','Read Users','2022-10-14 09:03:56','2022-10-14 09:03:56'),(3,'users-update','Update Users','Update Users','2022-10-14 09:03:56','2022-10-14 09:03:56'),(4,'users-delete','Delete Users','Delete Users','2022-10-14 09:03:56','2022-10-14 09:03:56'),(5,'payments-create','Create Payments','Create Payments','2022-10-14 09:03:56','2022-10-14 09:03:56'),(6,'payments-read','Read Payments','Read Payments','2022-10-14 09:03:56','2022-10-14 09:03:56'),(7,'payments-update','Update Payments','Update Payments','2022-10-14 09:03:56','2022-10-14 09:03:56'),(8,'payments-delete','Delete Payments','Delete Payments','2022-10-14 09:03:56','2022-10-14 09:03:56'),(9,'profile-read','Read Profile','Read Profile','2022-10-14 09:03:56','2022-10-14 09:03:56'),(10,'profile-update','Update Profile','Update Profile','2022-10-14 09:03:56','2022-10-14 09:03:56');

/*Table structure for table `role_user` */

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `role_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_user` */

insert  into `role_user`(`role_id`,`user_id`,`user_type`) values (1,1,'App\\Models\\User'),(2,2,'App\\Models\\User');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`display_name`,`description`,`created_at`,`updated_at`) values (1,'admin','Admin','Admin','2022-10-14 09:03:56','2022-10-14 09:03:56'),(2,'user','User','User','2022-10-14 09:03:56','2022-10-14 09:03:56');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'blank.png',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_show` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`first_name`,`last_name`,`contact_no`,`company_name`,`profile_picture`,`email`,`email_verified_at`,`password`,`password_show`,`user_type`,`remember_token`,`created_at`,`updated_at`,`facebook`,`insta`,`link_in`) values (1,'Dawn','Gill','03412250984','aaa','1/202210141127docker-container-status-tag-7 (1).png','dawngill08@gmail.com',NULL,'$2y$10$XlDpPihiIvoAwW8xQeBBh.wA6ZgfrvC17Ijg/0sbK6bWZbpLYAm6S','aa','1',NULL,'2022-10-14 10:41:26','2022-10-14 21:45:56','sa','sa','da'),(2,'Rooney','Zimmerman','73',NULL,'blank.png','zybocula@mailinator.com',NULL,'$2y$10$i9tiQ1xLBap9OV3Cmhza7e6L12qVBeSNx0KrsABEa2.UpuxmSaM0a','aa','2',NULL,'2022-10-15 22:01:54','2022-10-15 22:21:23','https://www.facebook.com/jpcarpet/',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
