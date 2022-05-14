<?php
require_once "forumconection.php";

if (isset($_POST["send"]))
{  if (empty($_POST['sub']) || empty($_POST['desc']) || empty($_POST['categories']))
     {
          $errors[] = 'סטודנט יקר אחת משדות שהזנת בשאלה ריקה נא לבדוק שנית בבקשה';
     }
     else
     {
     if (empty($errors) === true)
     {$forums=new Forum1(); 
      $res=$db->getIdforum();
     while($row = $res->fetch(PDO::FETCH_ASSOC))
     { 
        $Forum->setIdforum($row['id_forum']+1);
        echo $row['id_forum'];
     }
     if( $Forum->getIdforum()==null)
      {   $Forum->setIdforum(1);     
      }
     $Forum->setTitle($_POST['sub']);
     $Forum->setContents($_POST['desc']);
     $created = date('d-m-Y H:i:s');
     $Forum->setCreated($created);
     $Forum->setUser_id($_SESSION['userid']);
     $Forum->setNamesub($_POST['categories']);
     $forums->addTopic($Forum,$db);
                }
          }
     }
  
     //displaying all errors from the $errors[] array.
     if (empty($errors) === false)
     { 
          echo implode($errors)."\r\n";
     }
     else
     die('success');
?>