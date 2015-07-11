/* Creating Database */
CREATE DATABASE jpmc;


/* Creating users Table */
CREATE TABLE IF NOT EXISTS `users` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
);



/* Creating schools Table */



CREATE TABLE IF NOT EXISTS `schools` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cli_res` int(11) NOT NULL,
  `cost` bigint(20) NOT NULL,
  `will` int(11) NOT NULL,
  `avl_res` int(11) NOT NULL,
  `sus_inf` int(11) NOT NULL,
  `beneficiary` int(11) NOT NULL,
  `comm_inv` int(11) NOT NULL,
  `princi_inv` int(11) NOT NULL,
  `wcli_res` int(11) NOT NULL DEFAULT '5',
  `wcost` int(11) NOT NULL DEFAULT '5',
  `wwill` int(11) NOT NULL DEFAULT '5',
  `wavl_res` int(11) NOT NULL DEFAULT '4',
  `wsus_inf` int(11) NOT NULL DEFAULT '4',
  `wbeneficiary` int(11) NOT NULL DEFAULT '3',
  `wcomm_inv` int(11) NOT NULL DEFAULT '3',
  `wprinci_inv` int(11) NOT NULL DEFAULT '3'
);