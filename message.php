<?php
//שירין+עלאא
class message{//class למייל
protected $from;//מ
protected $subject;// נושא
protected $Message;//תוכן
protected $Mail;//תוכן
protected $phone;//תוכן

	
public function getfrom()//קבלת תוכן
{
return $this->from;
}
public function setfrom($from)//שמירת תוכן
{$this->from=$from;
}
public function getsubject()//קבלת נושא
{return $this->subject;
}
public function setsubject($subject)//שמירת נושא
{
$this->subject=$subject;
}
public function getMessage()//קבלת תוכן
{
	return $this->Message;
}
public function SETMessage($Message)//שמירת תוכן
{
	 $this->Message=$Message;
}
public function getMail()
{
	return $this->Mail;
}
public function setMail($Mail)
{
	 $this->Mail=$Mail;
}
public function getphone()
{
	return $this->phone;
}
public function setphone($phone)
{
	 $this->phone=$phone;
}

}
?>
