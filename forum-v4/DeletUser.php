 <?php
 require_once "forumconection.php";
 if (isset($_POST['delete']))
 {
  if ($_SESSION['typeuser']==0)
     $res=$db->getDataStudent($_SESSION['userid']);
 if ($_SESSION['typeuser']==1)
     $res=$db->getDataTeacher($_SESSION['userid']);
 while ($row=$res->fetch(PDO::FETCH_ASSOC))
{
     if ($_SESSION['typeuser']==1){
     
         $db->InsertToArchives($row['firstnamet'],$row['lastnamet'], $_SESSION['userid'], $_SESSION['typeuser']);
         $db->DeletUserTeacher($_SESSION['userid']);
         $db->DeletUserTeacherSub($_SESSION['userid']);
         $db->DeletUserTeacherEdu($_SESSION['userid']);
         $db->DeletUserTeacherCity($_SESSION['userid']);
         session_destroy();
        die('success');

     }
 if ($_SESSION['typeuser']==0){
    
     $db->InsertToArchives($row['firstnames'],$row['lastnames'], $_SESSION['userid'], $_SESSION['typeuser']);
     $db->DeletUserStudent($_SESSION['userid']);

    
     session_destroy();
     die('success');


 } 
}

}
 ?>