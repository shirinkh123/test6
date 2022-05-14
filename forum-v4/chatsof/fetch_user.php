<style>
<?php
	include ('../css/chat.css');
	?>
</style>
<?php


//fetch_user.php

include('database_connection.php');
session_start();//התחברות לצ'אט והצגת נתונים לפי מורה/תלמיד
if(	$_SESSION['typeuser']==0){
$query = "
SELECT * FROM teachers
";
}
if(	$_SESSION['typeuser']==1){
    $query = "
    SELECT * FROM students 
    ";
    }
$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output ='
<table class="table">

 <tr>
  <th>שם משתמש</th>
  <th>סטטוס</th>
  <th>פעולה</th>
 </tr>
';
if($_SESSION['typeuser']==0){
foreach($result as $row)
{
 $status = '';
 $current_timestamp = strtotime(date("d-m-Y H:i:s") . '- 10 second');
 $current_timestamp = date('d-m-Y H:i:s', $current_timestamp);
 $user_last_activity = fetch_user_last_activity($row['id_teachers'], $connect);
 if($user_last_activity > $current_timestamp)
 {
  $status = '<span class="label label-success">מחובר</span>';
 }
 else
 {
  $status = '<span class="label label-danger">לא מחובר</span>';
 }
 $output .= '
 <tr>
  <td>'.$row['firstnamet'].' '.$row['lastnamet'].' '.count_unseen_message($row['id_teachers'], $_SESSION['user_id'], $connect).'</td>
  <td>'.$status.'</td>
  <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['id_teachers'].'" data-tousername="'.$row['id_teachers'].'">לחץ כאן לצאט</button></td>
 </tr>
 ';
}}
if($_SESSION['typeuser']==1)
{
foreach($result as $row)
{
 $status = '';
 $current_timestamp = strtotime(date("d-m-Y H:i:s") . '- 10 second');
 $current_timestamp = date('d-m-Y H:i:s', $current_timestamp);
 $user_last_activity = fetch_user_last_activity($row['id_students'], $connect);
 if($user_last_activity > $current_timestamp)
 {
  $status = '<span class="label label-success">מחובר</span>';
 }
 else
 {
  $status = '<span class="label label-danger">לא מחובר</span>';
 }
 $output .= '
 <tr>
  <td>'.$row['firstnames'].' '.$row['lastnames'].' '.count_unseen_message($row['id_students'], $_SESSION['user_id'], $connect).'</td>
  <td>'.$status.'</td>
  <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['id_students'].'" data-tousername="'.$row['id_students'].'">לחץ כאן לצאט</button></td>
 </tr>
 ';
}
}
$output .= '</table>';

echo $output;

?>