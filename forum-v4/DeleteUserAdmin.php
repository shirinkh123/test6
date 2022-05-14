 <?php
 require_once "forumconection.php";
 require_once "../checkreglogin/checkFunc.php";
 $errArray=array();
 checkzehot($_POST['id'],$errArray);

 if($_POST['type']=='1'||$_POST['id']==null)
 $errArray[]="בבקשה תמלא את הת.ז ותבחר סוג משתמש";


 if(empty($errArray)){
 if (isset($_POST['del']))
 {
     if($_POST['type']=='student')
     $_SESSION['typeuser']=0;
     if($_POST['type']=='teacher')
     $_SESSION['typeuser']=1;
     if($_POST['type']=='Admin')
     $_SESSION['typeuser']=2;


  if ($_SESSION['typeuser']==0)
     $res=$db->getDataStudent($_POST['id']);
 if ($_SESSION['typeuser']==1)
     $res=$db->getDataTeacher($_POST['id']);
 while ($row=$res->fetch(PDO::FETCH_ASSOC))
{
     if ($_SESSION['typeuser']==1){
     
         $db->InsertToArchives($row['firstnamet'],$row['lastnamet'], $_POST['id'], $_SESSION['typeuser']);
         $db->DeletUserTeacher( $_POST['id']);
        die('success');

     }
 if ($_SESSION['typeuser']==0){
    
     $db->InsertToArchives($row['firstnames'],$row['lastnames'], $_POST['id'], $_SESSION['typeuser']);
     $db->DeletUserStudent( $_POST['id']);
     die('success');


 } 
}}
}
die(implode("\r\n",$errArray));	 


 ?>