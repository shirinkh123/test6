<?php
require_once "message.php";
require_once "checkreglogin/checkFunc.php";
require_once "Contact.php";
if(isset($_POST["submit0"]))
{
	
	$errArray=array();
	
 checkname($_POST['cf-name'],$errArray);
 checkEmail($_POST['cf-email'],$errArray);
checkphone($_POST['cf-number'],$errArray);
subject($_POST['cf-budgets1'],$errArray);
message($_POST['cf-message'],$errArray);

if(empty($errArray))
{ 
{//פונקצייה למייל
	    $re=new Contact();
		$msg=new message();
	$a=$_POST['cf-name'];
		$msg->setfrom($_POST['cf-name']);
	$msg->setMail($_POST['cf-email']);
		$msg->setphone($_POST['cf-number']);
		$msg->setsubject($_POST['cf-budgets1']);
		$msg->SETMessage($_POST['cf-message']);
		$re->Message($msg);
	die('success');
}
}

	foreach($errArray as $err)
	  {
		  echo $err."\r\n";
	  }
	}

?>
