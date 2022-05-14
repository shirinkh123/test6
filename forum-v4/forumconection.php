<?php 
/*קישור לכל הפורום והבסיס נתונים */
require_once "../get/get.php";
require  "forum.class.php";
require "forumclass.php";
require "repliesclass.php";
require  "replies.class.php";
require  "like.class.php";
require  "likeclass.php";


session_start(); 
$Forum = new Forum();
$db=new get();
$reply=new Reply();
$reply1=new Reply1();
$forums=new Forum1();
$Like=new Like();
$Like1=new Like1();

$_SESSION['res2']=array();
?>