<?php
session_start();
include "conn.php";

  $cli_res=$_REQUEST['cli_res'];
  $cost=$_REQUEST['cost'];
  $will=$_REQUEST['will'];
  $avl_res=$_REQUEST['avl_res'];
  $sus_inf=$_REQUEST['sus_inf'];
  $beneficiary=$_REQUEST['beneficiary'];
  $comm_inv=$_REQUEST['comm_inv'];
  $princi_inv=$_REQUEST['princi_inv'];
  

mysql_query("update TABLE schools set wcli_res='$cli_res'");
mysql_query("update TABLE schools set wcost='$cost'");
mysql_query("update TABLE schools set wwill='$will'");
mysql_query("update TABLE schools set wavl_res='$avl_res'");
mysql_query("update TABLE schools set wsus_inf='$sus_inf'");
mysql_query("update TABLE schools set wbebeficiary='$beneficiary'"
mysql_query("update TABLE schools set wcomm_inv='$comm_inv'");
mysql_query("update TABLE schools set wprinci_inv='$princi_inv'");

header('original.php');
mysql_close();
?>