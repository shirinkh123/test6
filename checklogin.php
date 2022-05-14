
<?php

session_start();
require_once "checkreglogin/checkFunc.php";
require_once "login/logClass.php";
require_once "Database/Database.php";
require_once "get/get.php";
if(isset($_POST["sub"]))
{
	$block=0;
	$db1=new get();
	


	$errArray=array();
	
	checkzehot($_POST['mail'],$errArray);
	checkPassword($_POST['pass'],$errArray);
	check($_POST['stud'],$errArray);
	
	$x= '$2y$10$MEOWnMDv.bulZOOzSl.JJOGYPKM8LolHWKoojwylfX8pGzvnQlY.m';

 	if(isset($_POST['mail'])&&isset($_POST['pass'])&&($_POST['stud']=="student"))
	{  	 
		 $d=0;	$_SESSION['userid']=$_POST['mail'];
		 $_SESSION['typeuser']=0;
 	}
	else
		if
			(isset($_POST['mail'])&&isset($_POST['pass'])&&($_POST['stud']=="teacher"))
		{
			
            $d=1;
			$_SESSION['userid']=$_POST['mail'];
			$_SESSION['typeuser']=1;
		}
	else
		if(isset($_POST['mail'])&&isset($_POST['pass'])&&($_POST['stud']=="Admin"))
	{  	 
		   $d=2;
		   $_SESSION['userid']=$_POST['mail'];
		   $_SESSION['typeuser']=2;
	
 	}
	else
		$errArray[]="please press teacher or student or admin";
	
	if(empty($errArray))
	{
		require_once "sseison.php";
		$log=new logClass();
		
		if(!$d){
			$v=$log->checkblock($_POST['mail'],$d,$db);
if($v==0)
{
			$res=$log->userLoginstudent($_POST['mail'],$_POST['pass'],$db);
			$_SESSION['flag']=1;
			$_SESSION['userid']=$_POST['mail'];
			$_SESSION['typeuser']=0;
}
else
{
$errArray[]="משתמש יקר אתה חסום מהמערכת כדי שתוכל לברר מה סיבת החסימה שלך והאם יש אפשרות להחזיר אותך נא לשלוח אלינו הודעה ב יצירת קשר עם פרטים שלך";
$res=0;
$block=1;
}
		}
		else
			if($d==1){
				$v=$log->checkblock($_POST['mail'],$d,$db);
				if($v==0)
				{
			$res=$log->userLoginteacher($_POST['mail'],$_POST['pass'],$db);
			$_SESSION['flag']=1;
			$_SESSION['userid']=$_POST['mail'];
			$_SESSION['typeuser']=1;
			}
		else
		{
			$errArray[]="משתמש יקר אתה חסום מהמערכת כדי שתוכל לברר מה סיבת החסימה שלך והאם יש אפשרות להחזיר אותך נא לשלוח אלינו הודעה ב יצירת קשר עם פרטים שלך";
$res=0;
$block=1;

		}
	}
		else
			if($d==2){
				$v=$log->checkblock($_POST['mail'],$d,$db);
				if($v==0)
				{
			$res=$log->userAdmin($_POST['mail'],$_POST['pass'],$db);
			$_SESSION['flag']=1;
			$_SESSION['userid']=$_POST['mail'];
			$_SESSION['typeuser']=2;
					
			
				}
						else
						{
							$errArray[]="משתמש יקר אתה חסום מהמערכת כדי שתוכל לברר מה סיבת החסימה שלך והאם יש אפשרות להחזיר אותך נא לשלוח אלינו הודעה ב יצירת קשר עם פרטים שלך";
							$res=0;
							$block=1;	
						}
			}
		if($_SESSION['R']==0)
		{

		$_SESSION['REG']=$_POST['mail'];
		$_SESSION['R']=1;
		$_SESSION['user_id'] = $_POST['mail'];
		
      
		}
		if($_SESSION['REG']!=$_POST['mail'])
		{

		$_SESSION['R']=0;
												
	$_SESSION['userid']=$_POST['mail'];
		}
		if($res!=0)
		{	$date=$log->date1($_POST['mail'],$d,$db);
$date = strtotime(date("Y-m-d", strtotime($date)) . " +3 month");
$date = date("Y-m-d",$date);
$today=date("Y-m-d");
		//	$_SESSION['flag']=1;
			$_SESSION['logged123']=$res;
			 $_SESSION['login_attempts']=0;
			if($d==0){
				if (strcmp($date, $today)<= 0)
				echo('תלמיד יקר עבר שלושה חודשים ועדיין לא שינית את הסיסמה עלייך לשנות את הסיסמה בבקשה לצורך ביטחות המערכת');
				else
			echo('student');
			$_SESSION['user_id']=$_POST['mail'];
			$_SESSION['userid']=$_POST['mail'];
			$result=$db1->getFirstNameStudent($_POST['mail']);
			
			while($r=$result->fetch(PDO::FETCH_ASSOC)) 
			$_SESSION['username'] = $r['firstnames'];
			echo 	$_SESSION['username'];
			$_SESSION['typeuser']=0;
			 

			}
			else
				if($d==1){
					//$_SESSION['flag']=1;
					if (strcmp($date, $today)<= 0)
				echo('מורה יקר עבר שלושה חודשים ועדיין לא שינית את הסיסמה עלייך לשנות את הסיסמה בבקשה לצורך ביטחות המערכת');
				

else
				echo('teacher');
				$_SESSION['typeuser']=1;	
					
			$_SESSION['user_id']=$_POST['mail'];
			$_SESSION['userid']=$_POST['mail'];
			$result=$db1->getIdUser($_POST['mail']);
				
			while($r=$result->fetch(PDO::FETCH_ASSOC)) 
			$_SESSION['username'] =$r['firstnamet'];
		}
	
			else
				if($d==2)
				{
					echo('admin');
					$_SESSION['userid']=$_POST['mail'];
					$_SESSION['typeuser']=2;
				
				}
			
				
			
		}
		
		else
		{if(empty($_SESSION['login_attempts']))
			$_SESSION['login_attempts'] =0;
			 $_SESSION['login_attempts'] = $_SESSION['login_attempts'] + 1 ;
			$w=$log->user($_POST['mail'],$db,$d);
		if(!empty($w))
			$a=1;
			else
				$a=0;
  if ($_SESSION['login_attempts']>= 3&&$a==1&&$block==0)
  {
	  require_once "forgetpassword.php";
	user121($_POST['mail'],$w,$d,$db);//email,t3odat zehot, $d;

	  

  }
else if ($_SESSION['login_attempts']>=3&&$a==0&&$block==0)
  {
	$errArray[]="לא תצליח לפרוץ למערכת שלנו האקר";
  }
else
	if
		($_SESSION['login_attempts']<3&&$a==1&&$block==0)
	{
		$errArray[]="סיסמה שגויה נא לנסות שנית";

		
	}
 else if ($_SESSION['login_attempts']<3&&$a==0)
  {
	$errArray[]="לא קיים משתמש עם תעודת זהות כזאת";
  }
	}
	}
	
	
	echo  die(implode("\r\n",$errArray));	 
}
?>