
<?php
//שירין +עלאא
class Teachers//class שמירת נתונים של משתמש
{
protected $firstname;
protected $lastname;
protected $IDS;
protected $setmkhir1;
protected $password;
protected $Email;
protected $PHONE;
protected $about;
public function getName()//קבלת שם
{
return $this->firstname;
}
public function setNAME($firstname)//שמירת שם
{$this->firstname=$firstname;
}
public function getlName()//קבלת שם
{
return $this->lastname;
}
public function setlNAME($lastname)//שמירת שם
{$this->lastname=$lastname;
}	
public function getIDS()//קבלת תעודת זהות
{return $this->IDS;
}
public function setIDS($IDS)//שמירת תעודת זהות
{
$this->IDS=$IDS;
}
public function getmkhir()//קבלת לימוד
{
	return $this->setmkhir1;
}
public function setmkhir($setmkhir1)//שמירת לימוד
{
	 $this->setmkhir1=$setmkhir1;
}
public function getpassword()//קבלת עיר
{
	return $this->password;
}
public function setpassword($password)//שמירת עיר
{
	 $this->password=$password;
}
public function getEMAIL()//קבלת מייל
{
	return $this->Email;
}
public function setEMAIL($Email)//שמירת מייל
{
	 $this->Email=$Email;
}
public function getPHONE()// קבלת טלפון
{
	return $this->PHONE;
}
public function setPHONE($PHONE)//שמירת טלפון
{
	 $this->PHONE=$PHONE;
}
public function setabout($about)//שמירת טלפון
{
	 $this->about=$about;
}
public function getabout()//שמירת טלפון
{
	return 	 $this->about;
}
}
?>
