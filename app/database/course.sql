/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 5.7.19 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `course` (
	`id` int (5),
	`name` varchar (75),
	`created_at` timestamp ,
	`updated_at` timestamp 
); 
insert into `course` (`id`, `name`, `created_at`, `updated_at`) values('1','MNG','2018-05-28 16:09:14','2018-05-28 16:09:14');
insert into `course` (`id`, `name`, `created_at`, `updated_at`) values('2','Corporate Gov. Jan 2017','2018-05-28 17:01:13','2018-05-28 17:01:13');
