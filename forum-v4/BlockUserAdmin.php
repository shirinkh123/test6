 <?php
 require_once "forumconection.php";
 require_once "../checkreglogin/checkFunc.php";


 $errArray=array();
 checkzehot($_POST['id'],$errArray);
 if(!isset($_POST['type'])||!isset($_POST['id'])||$_POST['blocking']=="1")
 $errArray[]="בבקשה תמלא את הת.ז ותבחר סוג משתמש";


 if(empty($errArray)){
 if (isset($_POST['block']))
 {
     if($_POST['blocking']=='block')
    $block=1;
    if($_POST['blocking']=='unblock')
    $block=0;
     if($_POST['type']=='student')
     $_SESSION['typeuser']=0;
     if($_POST['type']=='teacher')
     $_SESSION['typeuser']=1;
     if($_POST['type']=='Admin')
     $_SESSION['typeuser']=2;

 echo $_SESSION['typeuser'];
      if($_SESSION['typeuser']==0)
         $db->BlockUser($_POST['id'],$block,$_SESSION['typeuser']);
      else
      if($_SESSION['typeuser']==1)
         $db->BlockUser($_POST['id'],$block,$_SESSION['typeuser']);
      else
      if($_SESSION['typeuser']==2)   
        $db->BlockUser($_POST['id'],$block,$_SESSION['typeuser']);
      
      
      
        die('success');
     


 
}}
die(implode("\r\n",$errArray));	 


 ?>