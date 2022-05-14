<?php
//logout.php
include_once('database_connection.php');
session_start();
if(!empty($_SESSION['login_details']))
{
    $message = '';
    $off="yes";
    $id=$_SESSION['user_id'];
    $sub_query = "DELETE FROM login_details WHERE user_id=$id ";
    $statement = $connect->prepare($sub_query);
    $statement->execute();
}
session_destroy();
header('location:../../index.php');

?>