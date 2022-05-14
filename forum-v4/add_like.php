<?php
require 'forumconection.php';
if(!isset($_SESSION))
{
     session_start();
}
if (isset($_POST['like']))
{  
  
     $flag=1;
     $Like->setIdreply($_POST['like']);
     $Like->setIduser($_SESSION['userid']);

     $res3= $db->getUnLike($db,$_POST['like'],$_SESSION['userid']);
     while($row = $res3->fetch(PDO::FETCH_ASSOC)) 
     {
          $a=$row['unlikes'];
          echo $a;
     
     
     if($row['unlikes']>=1){
      
          $db->DeleteUnlike($db,$_POST['like'],$_SESSION['userid']);
     }
}

    $res= $db->getLike($db,$_POST['like'],$_SESSION['userid']);
    $res2=$db->getAllLike($_POST['like']);
    while($row1 = $res2->fetch(PDO::FETCH_ASSOC)) {
      $all=$row1['likes'];
      
    }

   while($row = $res->fetch(PDO::FETCH_ASSOC)) 
{
     $a=$row['likes'];
     


if($row['likes']>=1){
     $errArray[]="כבר נלחץ לייק על מודעה זאת";
     $flag=0;
}
}
if($flag){
    

    $Like->setLike($all+1);
   echo $Like->getLike();
   $_SESSION['likes']=$Like->getLike();
     $Like1->addLike($Like,$db);

            
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