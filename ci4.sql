/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 10.4.18-MariaDB : Database - ci4
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ci4` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `ci4`;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`version`,`class`,`group`,`namespace`,`time`,`batch`) values 
(1,'2021-04-24-040456','App\\Database\\Migrations\\Usertable','default','App',1619238334,1),
(2,'2021-04-24-042439','App\\Database\\Migrations\\Userstable','default','App',1619238334,1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`nama`,`nis`,`email`,`password`,`role`) values 
(1,'Administrator','0','admin@gmail.com','$2y$10$yRSVN6XZM4jb5ogx5Cyz.e3WCx0RUH0r3R6OR6xBf7YkEbrWCuAqC','admin'),
(2,'Admin','1','admin2@gmail.com','$2y$10$VGAKvpzTWbBmIZMPwV2i6uDvj/j4D2dvbCg8aXy5UyOzFy8OaJf/e','admin'),
(3,'User','2','user@gmail.com','$2y$10$kKqlVRqGcIF8RxS7rspLeO1J6tdo.rukumFdo7fDqYt9JRhdtv4u6','siswa'),
(4,'Husni Faqih','3','husni@gmail.com','$2y$10$ZRrWI3b5O70ThqPbRSFj1OanFBQofEBGx76LfsSFdMV8HOvY9gfqO','siswa'),
(5,'Amira','4','amira@gmail.com','$2y$10$ynT8e3NgQeB8IV1NQ4l.x.fXZpKYpGnrKA6CBCRqAUkafLt7h43LW','siswa'),
(6,'Ukasyah','5','uka@gmail.com','$2y$10$99cvHSsVhCVWLkk6x5wd7.YNfLak/zLIRnNcOl8PKATG.wC514rNq','siswa');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
