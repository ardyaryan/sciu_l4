/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 5.7.19 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `course_general` (
	`id` int (5),
	`course_id` int (5),
	`name` varchar (384),
	`file_name` varchar (144),
	`created_at` timestamp ,
	`updated_at` timestamp 
); 
insert into `course_general` (`id`, `course_id`, `name`, `file_name`, `created_at`, `updated_at`) values('1','1','Strategic Management MG 5202 Textbook','Strategic_Management_MG_5202_textbook.pdf','2018-05-28 19:20:29','2018-05-28 19:20:29');
insert into `course_general` (`id`, `course_id`, `name`, `file_name`, `created_at`, `updated_at`) values('2','1','Course Syllabus','Strategic_Management_Syllabus_DIU.pdf','2018-05-28 19:20:29','2018-05-28 19:20:29');
