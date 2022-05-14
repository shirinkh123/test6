<?php
require 'forumconection.php';
if (isset($_POST['comment']))
{  if (empty($_POST['comment']) || empty($_POST['reply']) )
     {
          $errors[] = 'מורה יקר לא ניתן לרשום תגובה ריקה';
     }
     else
     {
      if (empty($errors) === true)
     {$reply1=new Reply1();  
     $reply->setContents($_POST['reply']);
     $created = date('d-m-Y H:i:s');
     $reply->setCreated($created);
     $reply->setUser_id($_SESSION['userid']);
     $reply->setIdforum($_SESSION['id_forummm']);   
     $reply1->addReply($reply,$db);
     $_SESSION['on']=1;
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