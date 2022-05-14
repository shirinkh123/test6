<?php
require_once "register/regClass.php";
require_once "Teachers/Teachers.php";
require_once "checkreglogin/checkFunc.php";
require_once "Database/Database.php";
if(isset($_POST["submit1"]))
	{
	 $errArray=array();
 if(isset($_POST['cf-budgets'])&&isset($_POST['cf-kors'])&&isset($_POST['cf-bdsa']))
	{  
	  
	 
	  checkEmail($_POST['email'],$errArray);
	  checkname($_POST['name'],$errArray);
	   checkname($_POST['name1'],$errArray);
	   checkzehot($_POST['name2'],$errArray);
	   checkPassword($_POST['password'],$errArray);
	  checkphone($_POST['telephone'],$errArray);
	    checklemod($_POST['cf-budgets'],$errArray);
	   checkkorse($_POST['cf-kors'],$errArray);
	   checktoaar($_POST['cf-bdsa'],$errArray);
	   checkmkhir($_POST['name45'],$errArray);
	    if(empty($errArray))
	  {
			$reg=new regClass();
			if(!($reg->checkteacher($_POST['name2'],$db)))
			{
            // Retrieving each selected option 
            foreach ($_POST['cf-kors'] as $subject)   
		     	$reg->insertsubjectteacher($_POST['name2'],$subject,$db);
		    $reg->inserteductionteacher($_POST['name2'],$_POST['cf-bdsa'],$db);
            // Retrieving each selected option 
            foreach ($_POST['cf-budgets'] as $City)  
				$reg->insertcityteachers($_POST['name2'],$City,$db);
		$Teachers=new Teachers();
		$Teachers->setNAME($_POST['name']);
	    $Teachers->setlNAME($_POST['name1']);
		$Teachers->setIDS($_POST['name2']);
	    $Teachers->setPHONE($_POST['telephone']);
	    $Teachers->setEMAIL($_POST['email']);
	    $Teachers->setmkhir($_POST['name45']);

		$Teachers->setpassword(password_hash($_POST['password'],PASSWORD_BCRYPT));

		$reg->insertteacher($Teachers,$db);
		die('success');		
			}
			else
				$errArray[]="תעודת זהות כבר קיימת במערכת";
	}
 }
 
 if(!isset($_POST['cf-kors']))
	 $errArray[]="לא ניתן להירשם למערכת בלי בחירת הקורסים שמלמדים";
	 
	 if(!isset($_POST['cf-budgets']))
	 $errArray[]="לא ניתן להירשם למערכת בלי בחירת ערים שמעוניינים ללמד בהם";
	 
	 if(!isset($_POST['cf-bdsa']))
	 $errArray[]="לא ניתן להירשם למערכת בלי השכלה";

	foreach($errArray as $err)
	  {
		  echo $err."\r\n";
	  }
}
	?>
