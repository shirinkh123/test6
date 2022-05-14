<?php
require_once 'forumconection.php';
require_once "../checkreglogin/checkFunc.php";
require_once "../Teachers/Teachers.php";
require_once "update.php";
require_once "../login/logClass.php";
require_once  "../Database/Database.php";
if(isset($_POST["update"]))
	{   
        $Teachers=new Teachers();
        $errArray=array();
        $reg=new update();
        $db1=new logClass();
        $database=new Database();
        $flag=0;
        if(isset($_POST['cf-budget'])&&$_POST['cf-budget']!=null&&!empty($_POST['cf-budget']))
        {  
            
            
            checklemod($_POST['cf-budget'],$errArray);
            $reg->deleteeductionteacher($db,$_SESSION['userid']);
            $reg->inserteductionteacher($_SESSION['userid'],$_POST['cf-budget'],$db);
            
             
        }
        if(isset($_POST['cf-korsupdate'])&&($_POST['cf-korsupdate'])&&!empty($_POST['cf-korsupdate']))  
        {
             $b=implode (" ",$_POST['cf-korsupdate']);
             if($b>0)
             {
            checkkorse($_POST['cf-korsupdate'],$errArray);
          
            if(count($errArray)==0)
            {
            $reg->deletesubjectteacher($db,$_SESSION['userid']);
            
            foreach ($_POST['cf-korsupdate'] as $subject)   
            $reg->insertsubjectteacher($_SESSION['userid'],$subject,$db);
            }
        }
        } 
    
        if(isset($_POST['cf-Citiesupdate'])&&($_POST['cf-Citiesupdate'])&&!empty($_POST['cf-Citiesupdate']))
        {   $a=implode (" ",$_POST['cf-Citiesupdate']);
            if($a)
            {
            checkcity($_POST['cf-Citiesupdate'],$errArray);
            echo count(($_POST['cf-Citiesupdate']));
            if(count($errArray)==0)
            {
            $reg->deletecityteacher($db,$_SESSION['userid']);
           
            foreach ($_POST['cf-Citiesupdate'] as $City)  
            $reg->insertcityteachers($_SESSION['userid'],$City,$db);
            }
        }
    
     
        }  
        if(isset($_POST['pass2'])&&$_POST['pass']==null&&$_POST['pass2']!=null)
        $errArray[]="על מנת להחליף סיסמא יש למלא את השדה סיסמא נוכחית";
    


        if(isset($_POST['pass'])&&$_POST['pass']!=null){
            checkPassword($_POST['pass'],$errArray);
            checkPassword($_POST['pass2'],$errArray);
        if($db1->userLoginteacher($_SESSION['userid'],$_POST['pass'],$database)){
           if(isset($_POST['pass2'])&&isset($_POST['pass'])&&($_POST['pass2']!=null)&&($_POST['pass']!=null)&&empty($errArray))
           {
     
           if(empty($errArray)){
           $Teachers->setpassword(password_hash($_POST['pass2'],PASSWORD_BCRYPT));
           $flag=1;
           }
           else
           $errArray[]="סיסמא שנייה שגויה"; 
           }
        }
      else
         $errArray[]="סיסמא ישנה שגויה";
 
        
    }
       if(empty($_POST['fname'])||empty($_POST['fname'])||empty($_POST['tele'])||empty($_POST['email'])||empty($_POST['price']))
       $errArray[]="יש לכם שדה ריק";
    
       checkEmail($_POST['email'],$errArray);
       checkname($_POST['fname'],$errArray);
        checkname($_POST['lname'],$errArray);
        
       checkphone($_POST['tele'],$errArray);
      
        checkmkhir($_POST['price'],$errArray);

        if(empty($errArray)){
            $Teachers->setNAME($_POST['fname']);
            $Teachers->setlNAME($_POST['lname']);
    
            $Teachers->setPHONE($_POST['tele']);
            $Teachers->setEMAIL($_POST['email']);
            $Teachers->setmkhir($_POST['price']);
       
            $Teachers->setabout($_POST['about']);
    
           if($flag==1)
            $reg->updateteacher($Teachers,$db,$_SESSION['userid']);
            if($flag==0)
            $reg->updateteacher2($Teachers,$db,$_SESSION['userid']);
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
