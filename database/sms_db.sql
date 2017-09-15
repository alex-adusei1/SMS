

CREATE TABLE `user_types`(
	`id` int(10) primary key auto_increment,
	`name` varchar(255) not null,
);

CREATE TABLE `users` (
  `id` int(10) primary key auto_increment,
  `user_type_id` int(10),
  `first_name` varchar(255)DEFAULT 'first name',
  `lastname` varchar(255)  DEFAULT 'last name',
`middl_name` varchar(100) default 'middle name',
  `gender` enum('male','female') default 'male',
  `dob` date,
`country` varchar(100) default 'Ghana',
`location` varchar(100) default 'accra' not null, 
`postal_address` varchar(100) default 'P.O Box 1', 
`residential_address` varchar(100) not null,
`phone` varchar(15) default '0244000000', 
`mobile` varchar(15) not null,
`city` varchar(100) not null,
`place_of_birth` varchar(100) not null, 
`tribe` varchar(100) not null, 
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT 'username',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL, 
   FOREIGN KEY (user_type_id) REFERENCES user_types(id)

);



CREATE TABLE `classrooms`(
	`id` int(10) primary key auto_increment,
	`name` varchar(255) not null,
	`capacity` int not null, 
	`floor` varchar(100) not null default 'ground floor',
	`location` varchar(100) not null,
	`created_at` timestamp NULL DEFAULT NULL,
  	`updated_at` timestamp NULL DEFAULT NULL
);

CREATE TABLE `teacher_files`(
	`id` int(10) primary key auto_increment,
	`cv` varchar(255) not null default 'images/cvs/cv1.pdf',
	`certificate` varchar(255) not null default 'images/certs/cert1.pdf', 	
	`created_at` timestamp NULL DEFAULT NULL,
  	`updated_at` timestamp NULL DEFAULT NULL
);

create table `teachers`(
	`id` int primary key auto_increment, 
	`user_id` int(10), 
	`teacher_file_id` int(10), 
	`classroom_id` int(10),
	`date_employed` date not null, 
	`current_edu_level` varchar(100) not null, 
	`experences` int not null,
	`created_at` timestamp NULL DEFAULT NULL,
  	`updated_at` timestamp NULL DEFAULT NULL, 
	FOREIGN KEY (user_id) REFERENCES users(id),
	FOREIGN KEY (teacher_file_id) REFERENCES teacher_files(id),
	FOREIGN KEY (classroom_id) REFERENCES classrooms(id)
);




