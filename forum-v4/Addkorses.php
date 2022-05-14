<?php  
  
  require_once "forumconection.php";
  $errArray=array(); 

if(isset($_POST['korsadd'])&&isset($_POST['addkors'])&&($_POST['korsadd'])&&($_POST['addkors']))
{

                $num=$db->getLastNumKors();
                while($row = $num->fetch(PDO::FETCH_ASSOC)) 
                 $db->AddKors($_POST['addkors'],$row['id_sub']+1);
  


                 die('success');
  }

else
$errArray[]="בבקשה תבחר קורס להוספה";

  echo(implode("\r\n",$errArray));	 
                 ?>