<?php
session_start();
include "conn.php";

  $name=$_REQUEST['school'];
  $country=$_REQUEST['country'];
  $ngo=$_SESSION['XUSER'];
  $cli_res=$_REQUEST['q1'];
  $cost=$_REQUEST['q2'];
  $will=$_REQUEST['q3'];
  $avl_res=$_REQUEST['q4'];
  $sus_inf=$_REQUEST['q5'];
  $beneficiary=$_REQUEST['q6'];
  $comm_inv=$_REQUEST['q7'];
  $princi_inv=$_REQUEST['q8'];
  $comment=$_REQUEST['comment'];
  $pic=$_REQUEST['pic'];

mysql_query("insert into schools(name,country,ngo,cli_res,cost,will,avl_res,sus_inf,beneficiary,comm_inv,princi_inv,comment,pic) 
values('$name','$country','$ngo','$cli_res','$cost','$will','$avl_res','$sus_inf','$beneficiary','$comm_inv','$princi_inv','$comment','$pic')",$con);

header('index.html');
mysql_close();
?>