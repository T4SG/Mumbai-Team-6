<?php
session_start();
include "conn.php";

$name=$_REQUEST['name'];
$pwd=$_REQUEST['pwd'];

if($name=="NGO" && $pwd=="ngo123")
	header('forms.html');
if($name=="HHF" && $pwd=="hhf123")
	header('map1.html');

?>