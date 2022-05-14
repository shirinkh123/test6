<?php
require_once "Students/Student.php";
require_once "register/regClass.php";
require_once "checkreglogin/checkFunc.php";
require_once "Database/Database.php";
if(isset($_POST["submit2"]))
{
	$errArray=array();

	if(isset($_POST['cf-kors1'])&&isset($_POST['cf-budge'])&&isset($_POST['cf-budgets12']))
	{  
		
	   checkname($_POST['name123'],$errArray);
	   checkname($_POST['namel'],$errArray);
	   checkEmail($_POST['email12'],$errArray);
	   checkzehot($_POST['zehot'],$errArray);
	   checkPassword($_POST['password12'],$errArray);
	   checkphone($_POST['telephone12'],$errArray);
	   checklemod($_POST['cf-budge'],$errArray);
	   checkkorse($_POST['cf-kors1'],$errArray);
	   checktoaar($_POST['cf-budgets12'],$errArray);
	   if(empty($errArray))
	  { 
		   $reg=new regClass();
		   if(!($reg->checkstudent($_POST['zehot'],$db)))
				{
            foreach ($_POST['cf-kors1'] as $subject)   
			{
		     	$reg->insertsubjectstudent($_POST['zehot'],$subject,$db);
				
			}
            foreach ($_POST['cf-budge'] as $city)  
				$reg->insertcitystudents($_POST['zehot'],$city,$db);
		$reg->inserteductionstudent($_POST['zehot'],$_POST['cf-budgets12'],$db);
		$Student=new Student();
		$Student->setNAME($_POST['name123']);
	    $Student->setlNAME($_POST['namel']);
		$Student->setIDS($_POST['zehot']);
	    $Student->setPHONE($_POST['telephone12']);
		$Student->setEMAIL($_POST['email12']);
	

		$Student->setpassword(password_hash($_POST['password12'],PASSWORD_BCRYPT));
		$reg->insertstudent($Student,$db);
		die('success');	
	   }
else
				$errArray[]="id already exists";

}
	}
	
	if(!isset($_POST['cf-kors1']))
		$errArray[]="לא ניתן להירשם למערכת בלי בחירת הקורסים שרוצים ללמוד";
		
		if(!isset($_POST['cf-budge']))
		$errArray[]="לא ניתן להירשם למערכת בלי בחירת ערים שמעוניינים שיכולים ללמוד בהם";
		
		if(!isset($_POST['cf-budgets12']))
		$errArray[]="לא ניתן להירשם למערכת בלי השכלה";
	foreach($errArray as $err)
	  {
		  echo $err."\r\n";
	  }
	  
}

    ?>
