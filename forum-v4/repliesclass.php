
<?php
//שירין +עלאא
class Reply//שמירת נתונים של מגיב על שאלה מסויימת
{
protected $id_reply;
protected $contents;
protected $name_sub;
protected $user_id;
protected $idforum;
protected $created;

public function getIdreply()//מספר שאלה
{
return $this->id_reply;
}
public function setIdreply($id_reply)//שמירת מס שאלה
{$this->id_reply=$id_reply;
}	
public function getContents()//קבלת תוכן שאלה
{return $this->contents;
}
public function setContents($contents)//שמירת תוכן שאלה
{
$this->contents=$contents;
}
public function getUser_id()//קבלת ת.ז של שואל השאלה
{
	return $this->user_id;
}
public function setUser_id($user_id)//שמירת ת.ז שואל השאלה
{
	 $this->user_id=$user_id;
}

public function getIdforum()//מספר שאלה
{
return $this->idforum;
}
public function setIdforum($idforum)//שמירת מס שאלה
{$this->idforum= $idforum;
}
public function getCreated()//קבלת תאריך
{
	return $this->created;
}
public function setCreated($created)//שמירת תאריך
{
	 $this->created=$created;
}
}

?>
