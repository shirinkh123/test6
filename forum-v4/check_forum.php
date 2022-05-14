<?php
session_start();
require_once "checkForum.php";
require_once "login/logClass.php";
require_once "Database/Database.php";
if(isset($_POST["send"]))
{
	
	
	$errArray=array();
	
	checkdesc($_POST['desc'],$errArray);
    checkcategories($_POST['categories'],$errArray);
    checksub($_POST['sub'],$errArray);
	
if (isset($_POST['submit']))
{
     if (empty($_POST['username']) || empty($_POST['title']) || empty($_POST['message']))
     {
          $errors[] = 'Error: All fields are required to post.';
     }
     else
     {
          if (empty($errors) === true)
          {
               $username = htmlentities($_POST['username']);
               $title = htmlentities($_POST['title']);
               $message = htmlentities($_POST['message']);
               $whatforum = (int)$_GET['forum'];
               $created = date('Y-m-d H:i:s');
               $forums->addTopic($username,$title,$message,$whatforum,$created);
               $newtopicid = $dbh->lastInsertId();
               
               echo '<p>Thank you, your topic has been added to the '.htmlspecialchars($_GET['forum'],ENT_QUOTES).' forum.</p>';
echo '<br /><a href="forum_main.php">Back to main board</a> <font color="#898989">or click <a href="add_topic.php?id='.$newtopicid.'">here</a>';
           }
     }
}
 
//displaying all errors from the $errors[] array.
if (empty($errors) === false)
{ 
     echo ' '.implode($errors).' ';
}
	
	if(empty($errArray))
	{
		require_once "sseison.php";
		$log=new logClass();
		
		if(!$d)
			$res=$log->userLoginstudent($_POST['mail'],$_POST['pass'],$db);
		else
			if($d==1)
			$res=$log->userLoginteacher($_POST['mail'],$_POST['pass'],$db);
		else
			if($d==2)
				$res=$log->userAdmin($_POST['mail'],$_POST['pass'],$db);
		if($_SESSION['R']==0)
		{
		$_SESSION['REG']=$_POST['mail'];
		$_SESSION['R']=1;
		}
		if($_SESSION['REG']!=$_POST['mail'])
		{
		$_SESSION['login_attempts']=0;	
		$_SESSION['R']=0;
		}
		if($res!=0)
		{

			$_SESSION['logged123']=$res;
			 $_SESSION['login_attempts']=0;
			if($d==0)
			echo('success');
			else
				if($d==1)
				echo('hello');
			else
				if($d==2)
					echo('love');
			
			
				
			
		}
		else
		{
			 $_SESSION['login_attempts'] = $_SESSION['login_attempts'] + 1 ;
			$w=$log->user($_POST['mail'],$db,$d);
		if(!empty($w))
			$a=1;
			else
				$a=0;
  if ($_SESSION['login_attempts']>= 3&&$a==1)
  {
	  require_once "forgetpassword.php";
	user121($_POST['mail'],$w,$d,$db);//email,t3odat zehot, $d;

	  

  }
else if ($_SESSION['login_attempts']>=3&&$a==0)
  {
	  echo "Go from here thief";
  }
else
	if
		($_SESSION['login_attempts']<3&&$a==1)
	{
			  echo "WRONG  Password  Please try again";

		
	}
 else if ($_SESSION['login_attempts']<3&&$a==0)
  {
	  echo "Wrong ID Please try again";
  }
	}
	}
	
	
	die(implode("\r\n",$errArray));	 
}
?>
