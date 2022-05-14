<?php
require_once "forumconection.php";
require_once "../checkreglogin/checkFunc.php";
$errArray=array();
$pass="123456789"; 
if(isset($_POST["Check_admin"])&&$_POST['passadmin2'])
{
   if(strcmp($pass,$_POST['passadmin2'])==0)
die('success');
 else
 $errArray[]="סיסמא שגויה";
  
}
else
$errArray[]="נא מלא את השדה של הסיסמא";
foreach($errArray as $err)
	  {
		  echo $err."\r\n";
      }
      ?>