Database name: codeigniter_rest_api

Table code:

CREATE TABLE `tbl_students` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(100) DEFAULT NULL,
 `email` varchar(50) DEFAULT NULL,
 `mobile` varchar(15) DEFAULT NULL,
 `course` varchar(150) DEFAULT NULL,
 `status` int(11) NOT NULL DEFAULT '1',
 `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
