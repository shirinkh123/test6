<?php
require_once "update.php";
require_once 'forumconection.php';
require_once "../checkreglogin/checkFunc.php";
require_once "../Students/Student.php";
require_once "../login/logClass.php";
require_once  "../Database/Database.php";
if(isset($_POST["updates"]))
	{   
        $Student=new Student();
        $errArray=array();
        $reg=new update();
        $db1=new logClass();
        $database=new Database();
        $flag=0;
 if(isset($_POST['cf-budgets'])&&($_POST['cf-budgets'])&&!empty($_POST['cf-budgets']))
	{  
        
        
        checklemod($_POST['cf-budgets'],$errArray);
        $reg->deleteeductionstudent($db,$_SESSION['userid']);
        $reg->inserteductionstudent($_SESSION['userid'],$_POST['cf-budgets'],$db);
        
         
    }
    if(isset($_POST['cf-korsupdates'])&&($_POST['cf-korsupdates'])&&!empty($_POST['cf-korsupdates'])&&empty($errArray))  
    {
         $b=implode (" ",$_POST['cf-korsupdates']);
         if($b>0)
         {
        checkkorse($_POST['cf-korsupdates'],$errArray);
      
        if(count($errArray)==0)
        {
        $reg->deletesubjectstudent($db,$_SESSION['userid']);
        
        foreach ($_POST['cf-korsupdates'] as $subject)   
        $reg->insertsubjectstudent($_SESSION['userid'],$subject,$db);
        }
    }
    } 

    if(isset($_POST['cf-Citiesupdates'])&&($_POST['cf-Citiesupdates'])&&!empty(($_POST['cf-Citiesupdates']))&&empty($errArray))
    {   $a=implode (" ",$_POST['cf-Citiesupdates']);
        if($a)
        {
        checkcity($_POST['cf-Citiesupdates'],$errArray);
        echo count(($_POST['cf-Citiesupdates']));
        if(count($errArray)==0)
        {
        $reg->deletecitystudent($db,$_SESSION['userid']);
       
        foreach ($_POST['cf-Citiesupdates'] as $City)  
        $reg->insertcitystudents($_SESSION['userid'],$City,$db);
        }
    }
  

   
    if(isset($_POST['passs2'])&&$_POST['passss']==null&&$_POST['passs2']!=null)
    $errArray[]="על מנת להחליף סיסמא יש למלא את השדה סיסמא נוכחית";

    if(isset($_POST['passss'])&&$_POST['passss']!=null){
        checkPassword($_POST['passss'],$errArray);
    checkPassword($_POST['passs2'],$errArray);
     if($db1->userLoginstudent($_SESSION['userid'],$_POST['passss'],$database))
        {
           
        
       if(isset($_POST['passs2'])&&isset($_POST['passss'])&&($_POST['passs2']!=null)&&($_POST['passss']!=null)&&empty($errArray))
       {
    
       if(empty($errArray))
       {
       $Student->setpassword(password_hash($_POST['passs2'],PASSWORD_BCRYPT));
       $flag=1;
       }
       else
       $errArray[]="סיסמא חדשה שגויה";
       }
    }
   else

    $errArray[]="סיסמא ישנה שגויה";

        }
       
	    if(empty($errArray))
        if(empty($_POST['fnames'])||empty($_POST['fnames'])||empty($_POST['teles'])||empty($_POST['emails']))
        $errArray[]="יש לכם שדה ריק";
        if(empty($errArray)){
        checkEmail($_POST['emails'],$errArray);
        checkname($_POST['fnames'],$errArray);
         checkname($_POST['lnames'],$errArray);
         
        checkphone($_POST['teles'],$errArray);
        }
        if(empty($errArray)){

        $Student->setNAME($_POST['fnames']);
        echo $Student->getNAME();
	    $Student->setlNAME($_POST['lnames']);
        echo $Student->getlNAME();
        $Student->setPHONE($_POST['teles']);
        echo $Student->getPHONE();
	    $Student->setEMAIL($_POST['emails']);
        echo $Student->getEMAIL();
        if($flag==0)
        $reg->updatestudent2($Student,$db,$_SESSION['userid']);
        if($flag==1)
        $reg->updatestudent($Student,$db,$_SESSION['userid']);
            }
        }
     
   
    }
            
    foreach($errArray as $err)
    {
        echo $err."\r\n";
    }
                if (empty($errArray) )
                { 
                    die('success');   
                }
                
             
   
    
?>
