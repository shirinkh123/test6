
   <?php
    class Contact
    {
    public function Message(message $msg)//פונקציה לשליחת הודעה
		{echo "hi";
            mb_internal_encoding('UTF-8'); 
        $to1="ahrhijurh1@walla.co.il";
        $to2="ala2_kh33@hotmail.com";
        $subject=$msg->getsubject()."\r\n";
        $subject = mb_encode_mimeheader($subject, 'UTF-8', 'B', "\r\n"); 

        $headers ="Content-type: text/plain; charset=UTF-8";
        $headers .= $msg->getMail() . "\r\n";	
        $headers = mb_encode_mimeheader($headers, 'UTF-8', 'B', "\r\n"); 
        
        



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

$message .='<div style="width:100%;background:#F0EAD6;text-align:center; font-size:1.3em;">'."שם:".$msg->getfrom()."\r\n"."נושא:".$msg->getsubject()."\r\n"."תוכן:".$msg->getMessage()."\r\n"."מספר טלפון:".$msg->getphone()."\r\n"."מייל:".$msg->getMail() . "\r\n";


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

 


















        mail($to2,$subject,$message,$headers);
        mail($to1,$subject,$message,$headers);

			/*
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10" margin: auto; width:500px; direction:rtl;> ';
$message .= "<tr style='background: #eee;'><td><strong>שם:</strong> </td><td>" .$msg->getfrom(). "</td></tr>";
$message .= "<tr><td><strong>נושא:</strong> </td><td>" . $msg->getsubject() . "</td></tr>";
$message .= "<tr><td><strong>תוכן:</strong> </td><td>" . $msg->getMessage() . "</td></tr>";
$message .= "<tr><td><strong>טלפון:</strong> </td><td>" . $msg->getphone() . "</td></tr>";
$message .= "<tr><td><strong>מייל:</strong> </td><td>" . $msg->getMail(). "</td></tr>";
$message .= "</table>";
*/
	
				
        }
    }
        ?>
     