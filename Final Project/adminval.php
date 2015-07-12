<?php
if(isset($_REQUEST['name']) && isset($_REQUEST['pwd']))
{
   $un = $_REQUEST['name'];
   $pwd = $_REQUEST['pwd'];
   
   
   include "conn.php";
	$sql="select * from users where name='$un' and pwd='$pwd'";
	
	
	$result=mysql_query($sql,$con);
	$row = mysql_fetch_row($result);

    
	if(mysql_num_rows($result)!=0)
  {
	    session_start();
    $_SESSION['XUSER']=$un;
	
		header('Location: map5.html');
		
	}
	else
   {
	  header('Location: adminlogin.html'); 
	 }
   }	
?>