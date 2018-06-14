/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 5.7.19 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `course_participant` (
	`id` int (11),
	`course_id` int (5),
	`user_id` int (11),
	`notes_id` int (5),
	`course_blog_id` int (5),
	`created_at` timestamp ,
	`updated_at` timestamp 
); 
