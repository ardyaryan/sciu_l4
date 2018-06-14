/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 5.7.19 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `course_content` (
	`id` int (5),
	`course_id` int (5),
	`name` varchar (144),
	`course_name` varchar (144),
	`course_period` varchar (96),
	`file_name` varchar (144),
	`assignment_id` int (5),
	`created_at` timestamp ,
	`updated_at` timestamp 
); 
insert into `course_content` (`id`, `course_id`, `name`, `course_name`, `course_period`, `file_name`, `assignment_id`, `created_at`, `updated_at`) values('1','1','Lecture 1','Strategic Management','7 March - 13 March','Strategic_Management_Lecture_1.pptx',NULL,'2018-05-28 16:30:18','2018-05-28 16:30:18');
insert into `course_content` (`id`, `course_id`, `name`, `course_name`, `course_period`, `file_name`, `assignment_id`, `created_at`, `updated_at`) values('2','1','Lecture 2','Strategic Management','14 March - 20 March','Strategic_Management_Lecture_2.pptx',NULL,'2018-05-28 16:38:56','2018-05-28 16:38:56');
insert into `course_content` (`id`, `course_id`, `name`, `course_name`, `course_period`, `file_name`, `assignment_id`, `created_at`, `updated_at`) values('3','1','Lecture 3','Strategic Management','21 March - 27 March','Strategic_Management_Lecture_3.pptx',NULL,'2018-05-28 16:40:49','2018-05-28 16:40:49');
insert into `course_content` (`id`, `course_id`, `name`, `course_name`, `course_period`, `file_name`, `assignment_id`, `created_at`, `updated_at`) values('4','1','Lecture 4','Strategic Management','28 March - 3 April','Strategic_Management_Lecture_4.pptx',NULL,'2018-05-28 18:55:00','2018-05-28 18:55:00');
insert into `course_content` (`id`, `course_id`, `name`, `course_name`, `course_period`, `file_name`, `assignment_id`, `created_at`, `updated_at`) values('5','1','Lecture 5','Strategic Management','4 April - 10 April','Strategic_Management_Lecture_5.pptx',NULL,'2018-05-28 18:55:00','2018-05-28 18:55:00');
insert into `course_content` (`id`, `course_id`, `name`, `course_name`, `course_period`, `file_name`, `assignment_id`, `created_at`, `updated_at`) values('6','1','Lecture 6','Strategic Management','11 April - 17 April','Strategic_Management_Lecture_6.pptx',NULL,'2018-05-28 18:59:57','2018-05-28 18:59:57');
insert into `course_content` (`id`, `course_id`, `name`, `course_name`, `course_period`, `file_name`, `assignment_id`, `created_at`, `updated_at`) values('7','1','Lecture 7','Strategic Management','18 April - 24 April','Strategic_Management_Lecture_7.pptx',NULL,'2018-05-28 18:59:57','2018-05-28 18:59:57');
insert into `course_content` (`id`, `course_id`, `name`, `course_name`, `course_period`, `file_name`, `assignment_id`, `created_at`, `updated_at`) values('8','2','Week 1','Corporate Gov. Jan 2017','12 January - 18 January','MIC_Governance_Class_1.pptx','1','2018-05-28 20:11:58','2018-05-28 20:11:58');
insert into `course_content` (`id`, `course_id`, `name`, `course_name`, `course_period`, `file_name`, `assignment_id`, `created_at`, `updated_at`) values('9','2','Week 2','Corporate Gov. Jan 2017','19 January - 25 January','MIC_Governance_Class_2.pptx','2','2018-05-28 20:14:41','2018-05-28 20:14:41');
insert into `course_content` (`id`, `course_id`, `name`, `course_name`, `course_period`, `file_name`, `assignment_id`, `created_at`, `updated_at`) values('10','2','Week 3','Corporate Gov. Jan 2017','26 January - 1 February','MIC_Governance_Class_3.pptx',NULL,'2018-05-28 20:22:42','2018-05-28 20:22:42');
insert into `course_content` (`id`, `course_id`, `name`, `course_name`, `course_period`, `file_name`, `assignment_id`, `created_at`, `updated_at`) values('11','2','Week 4','Corporate Gov. Jan 2017','2 February - 8 February','MIC_Governance_Class_4.pptx',NULL,'2018-05-28 20:23:43','2018-05-28 20:23:43');
