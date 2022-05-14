<?php
require_once "Database/Database.php";
require_once "login/logClass.php";
require_once "get/get.php";//include
function user121($id,$email,$d,$db)
{
    $log=new logClass();
        $alphabet = 'abcdefghijklmnopqrstuvwxyz1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 6; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
      
        $pass=implode($pass);
        $pass1=$pass;
        $pass1=password_hash($pass1,PASSWORD_BCRYPT);
$password=$log->update($id,$pass1,$d,$db);
if($password)
{
    mb_internal_encoding('UTF-8'); 

$subject = 'סיסמתך נשלחה בהצלחה'."\r\n";
$header="From:Lelmod Kham"; 


$message = '<html lang="he-IL">';

$message .= '<head><meta charset="utf-8">';
$message .='<title>ברוכים הבאים לאתר ללמוד חכם</title>';

$message .= '</head>';

$message .= '<body dir="rtl" style="width:97%;margin:10px auto;padding:0;color:#990033;font-size:2em;line-height:2;font-family:Arial,Helvetica,sans-serif;">';

$message .= '<div style="border:1px solid #339900;">';

$message .= '<div id="header" style="background:linear-gradient(to right, #0575E6, #00F260);border-bottom:1px solid #339900;">';

$message .= '<div style="padding:20px;text-align:center;width:50%;margin:0 auto;">';

$message .= '<h1>ללמוד חכם</h1>';

$message .= '</div>';

$message .= '</div>';
$message .='שלום לך מאתר ללמוד חכם'. "\r\n". 'פרטי ההתחברות שלך הם :'."\r\n" ;
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10" margin: auto; width:500px; direction:rtl;> ';
$message .= "<tr style='background: #eee;'><td><strong>שם משתמש/ת.ז:</strong> </td><td>" .$id. "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>סיסמא זמנית:</strong> </td><td>" . $pass . "</td></tr>";
$message .= "</table>";
$message .=  'כרגע אתה יכול להתחבר עם התעודת זהות והסיסמה'."\r\n";
$message .= '<div style="width:100%;margin-right:20px;">';

$message .= '<p style="text-align:center;">';

$message .= '<img src="//cdn.pixabay.com/photo/2015/04/16/16/16/smart-725843_1280.jpg" alt="אתר למורים פרטיים בתחום התוכנה" style="width:50%;height:100px;border:1px solid #339900;" />';

$message .= '</p>';


$message .= '</div>';

$message .= '</div>';

$message .= '<div id="footer" style="background:linear-gradient(to right, #0575E6, #00F260);border-top:1px solid #339900;">';

$message .= '<div style="padding:20px;text-align:center;width:50%;margin:0 auto;">';

$message .= '<p style="font-size:1.0em;">אתר למורים פרטיים בתחום התוכנה';
$message .= '</p>';
$message .= '</div></div></div>';

$message .= '</body></html>';
$subject = mb_encode_mimeheader($subject, 'UTF-8', 'B', "\r\n"); 
$header = mb_encode_mimeheader($header, 'UTF-8', 'B', "\r\n"); 
mail($email, $subject,$message, $header);   
	echo "אם החשבון שאתה מנסה להיכנס אילו הוא חשבון שלך נשלח לך מייל עם פרטים שלך";
    } 

} 
?>
