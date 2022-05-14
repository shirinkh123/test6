<?php
require 'forumconection.php';
if(isset($_POST['opt'])&&$_POST['opt']!=null)
$db->insertpoll($_POST['opt']);

?>