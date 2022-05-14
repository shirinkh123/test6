<?php  
  
  require_once "forumconection.php";
  $errArray=array(); 
  $b=implode (" ",$_POST['cf-korsdel']);
  echo $b;
if(empty($errArray)&&$b>0)
{
  if(isset($_POST['kors'])){
  foreach ($_POST['cf-korsdel'] as $kors)  {
      echo $kors;
                 $db->DeletKors($kors);
                 $db->DeletKorsTeach($kors);
                 $db->DeletKorsStud($kors);
  }


                 die('success');
  }
}
else
$errArray[]="בבקשה תבחר קורס להסרה";

  echo(implode("\r\n",$errArray));	 
                 ?>