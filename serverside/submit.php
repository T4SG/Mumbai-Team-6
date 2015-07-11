<?php
session_start();
include "conn.php";

$name=$_REQUEST['name'];
$pwd=$_REQUEST['pwd'];
$email=$_REQUEST['email'];


mysql_query("insert into users(name,pwd,email) values('$name','$pwd','$email')",$con);

header('index.html');
mysql_close();

?>




 