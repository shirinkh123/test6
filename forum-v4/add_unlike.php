<?php
require 'forumconection.php';
if(!isset($_SESSION))
{
     session_start();
}

if (isset($_POST['unlike']))
{  
  
     $flag=1;
     $flagg=1;
     $Like->setIdreply($_POST['unlike']);
     $Like->setIduser($_SESSION['userid']);
   
    $res= $db->getUnLike($db,$_POST['unlike'],$_SESSION['userid']);
    $res2=$db->getAllUnLike($_POST['unlike']);
    while($row1 = $res2->fetch(PDO::FETCH_ASSOC)) {
      $all=$row1['unlikes'];
      echo $all;
      $flagg=0;
    }
    
    $res3= $db->getLike($db,$_POST['unlike'],$_SESSION['userid']);
    while($row = $res3->fetch(PDO::FETCH_ASSOC)) 
    {
         $a=$row['likes'];
         echo $a;
    
    
    if($row['likes']>=1){
     
         $db->DeleteLike($db,$_POST['unlike'],$_SESSION['userid']);
    }
}
    if($flagg)
    $all=0;

   while($row = $res->fetch(PDO::FETCH_ASSOC)) 
{
     $a=$row['unlikes'];
     echo $a;


if($row['unlikes']>=1){
 
     $errArray[]="כבר נלחץ אנלייק על מודעה זאת";
     $flag=0;
}
}
if($flag){
  


    $Like->setUnlike($all+1);
   echo $Like->getUnlike();
   $_SESSION['likes']=$Like->getUnlike();
     $Like1->addUnLike($Like,$db);

            
}
     
     if (empty($errArray) === false)
     { 
          echo implode($errArray)."\r\n";
     }
     if (empty($errArray) === true)
     { 
          die('success');	
     }

     
}
?>