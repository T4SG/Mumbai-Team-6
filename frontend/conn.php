<?php
$con=mysql_connect('localhost','root','');
if(!$con)
	die('ERROR:'.mysql_error());

$sql=mysql_select_db('jpmc',$con);
if(!$sql)
	die('ERROR:'.mysql_error());

?>