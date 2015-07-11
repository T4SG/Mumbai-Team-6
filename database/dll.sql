/* Creating Database */
CREATE DATABASE jpmc;


/* Creating Table */
CREATE TABLE IF NOT EXISTS `users` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
);