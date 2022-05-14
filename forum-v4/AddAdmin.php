<?php
require_once "forumconection.php";
require_once "../checkreglogin/checkFunc.php";
$errArray=array(); 
if(isset($_POST["AddNewAdmin1"]))
{
checkzehot($_POST['idadmin'],$errArray);
checkPassword($_POST['passadmin'],$errArray);
if(empty($errArray))
{
    $db->insertAdmin($_POST['idadmin'],password_hash($_POST['passadmin'],PASSWORD_BCRYPT));

die('success');

}
}
else

echo  die(implode("\r\n",$errArray));	 

foreach($errArray as $err)
	  {
		  echo $err."\r\n";
      }
      ?>