
<?php
//שירין +עלאא
class Forum//שמירת נתונים של שואל השאלה בפורום
{
protected $id_forum;
protected $title;
protected $contents;
protected $name_sub;
protected $user_id;
protected $created;

public function getIdforum()//מספר שאלה
{
return $this->id_forum;
}
public function setIdforum($id_forums)//שמירת מס שאלה
{$this->id_forum=$id_forums;
}
public function getTitle()//קבלת כותרת נושא
{
return $this->title;
}
public function setTitle($title)//שמירת נושא/כותרת
{$this->title=$title;
}	
public function getContents()//קבלת תוכן שאלה
{return $this->contents;
}
public function setContents($contents)//שמירת תוכן שאלה
{
$this->contents=$contents;
}
public function getNamesub()//קבלת שם קטגוריה
{
	return $this->name_sub;
}
public function setNamesub($name_sub)//שמירת שם קטגוריה
{
	 $this->name_sub=$name_sub;
}
public function getUser_id()//קבלת ת.ז של שואל השאלה
{
	return $this->user_id;
}
public function setUser_id($user_id)//שמירת ת.ז שואל השאלה
{
	 $this->user_id=$user_id;
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
